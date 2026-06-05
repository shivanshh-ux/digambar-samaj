# Jain Digambar Matrimony - Detailed Database Schema & Migration Plan (Production Version v1.1)

## Overview

The system is divided into two layers:

### 1. Import Layer
Stores raw Google Form submissions exactly as received.
*   `members`
*   `import_images`

### 2. Production Layer
Used by the website, admin panel, memberships, profiles, payments, and future expansion.
*   `admins`
*   `users`
*   `user_addresses`
*   `family_details`
*   `memberships`
*   `user_memberships`
*   `payments`
*   `contact_messages`
*   `success_stories`
*   `community_events`
*   `advertisements`
*   `site_settings`
*   `activity_logs`
*   `import_history`

---

## Complete Database ER Structure

```
admins
 │
 └── activity_logs

users
 │
 ├── user_addresses
 ├── family_details
 ├── user_memberships
 ├── payments
 └── success_stories

memberships
 │
 └── user_memberships

members
 │
 └── import_images

import_history
contact_messages
community_events
advertisements
site_settings
```

---

## Table Structures

### TABLE 1: admins
**Purpose**: Admin login and authorization.
| Field | Type | Description |
| :--- | :--- | :--- |
| id | BIGINT PK | Admin ID |
| name | VARCHAR(150) | Full Name |
| email | VARCHAR(150) | Login Email |
| password_hash | VARCHAR(255) | Hashed Password |
| role | ENUM | super_admin/admin/moderator |
| status | BOOLEAN | Active/Inactive |
| last_login | DATETIME | Last Login Time |
| created_at | TIMESTAMP | Created Date |
| updated_at | TIMESTAMP | Modified Date |

### TABLE 2: users
**Purpose**: Master matrimonial profile.

**Profile ID**
*   `profile_id` - Generated automatically during registration/import in format `JDM000001`, `JDM000002`

**Personal Information**
*   `full_name`, `email`, `mobile`, `country_code`, `gender`, `birth_date`, `birth_time`, `birth_place`, `height`, `weight`

**Community Information**
*   `are_you_digambar_jain`, `native_place`, `gotra`, `mama_gotra`, `manglik`

**Matrimonial Information**
*   `marital_status`, `handicapped`, `partner_preference`

**Education & Career**
*   `higher_education`, `occupation`, `company_name`, `designation`, `monthly_income`, `languages`, `hobbies`

**Photos**
*   `profile_photo`, `family_photo`, `profile_photo_drive_url`, `payment_screenshot`, `payment_proof_drive_url`

**Status & Tracking**
*   `status`, `verified`, `approved_by` (FK -> admins.id), `approved_at`, `featured_until`, `deleted_at`, `registration_source`, `is_public`

**Indexes Applied**
*   `status`, `gender`, `gotra`, `native_place`, `marital_status`, `mobile`, `email`, `featured_until`, `birth_date`, `verified`, `is_public`, `approved_by`

### TABLE 3: user_addresses
**Purpose**: Stores candidate address details.
*   `user_id`, `permanent_address`, `permanent_pin_code`, `current_address`, `current_pin_code`, `city`, `state`, `country`

### TABLE 4: family_details
**Purpose**: Stores family details.
*   **Father**: `father_name`, `father_mobile`, `father_income`, `father_occupation`
*   **Mother**: `mother_name`, `mother_mobile`, `mother_occupation`
*   **Siblings**: `brothers`, `brothers_married`, `brothers_unmarried`, `sisters`, `sisters_married`, `sisters_unmarried`

### TABLE 5: memberships
**Purpose**: Membership plans.

**Sample Records**
| Plan | Price |
| :--- | :--- |
| Basic | ₹999 |
| Premium | ₹2499 |
| Elite | ₹4999 |

**Fields**
*   `id`, `plan_name`, `price`, `duration_days`, `contact_limit`, `featured_profile`, `priority_support`, `status`, `created_at`, `updated_at`

### TABLE 6: user_memberships
**Purpose**: Stores purchased memberships.
*   `user_id`, `membership_id`, `start_date`, `end_date`, `status`, `can_view_contacts`
*   *Note*: A unique constraint ensures a user cannot have duplicate active memberships.

### TABLE 7: payments
**Purpose**: Stores payment records.
*   `user_id`, `membership_id`, `amount`, `transaction_id`, `payment_method`, `payment_remarks`, `payment_screenshot`, `status`, `verified_by` (FK -> admins.id)
*   *Indexes Applied*: `status`, `transaction_id`

### TABLE 8: contact_messages
**Purpose**: Stores Contact Us messages.

### TABLE 9: success_stories
**Purpose**: Stores successful marriage stories.
*   `user_id`, `couple_name`, `engagement_date`, `marriage_date`, `story`, `photo`, `status`

### TABLE 10: community_events
**Purpose**: Used by `community.php`
*   `title`, `description`, `event_date`, `location`, `banner`, `status`

### TABLE 11: advertisements
**Purpose**: Homepage banners and sidebar ads.
*   `title`, `image`, `link`, `position`, `status`

### TABLE 12: site_settings
**Purpose**: Global website configuration.
*   `site_name`, `site_email`, `site_phone`, `site_address`, `upi_id`, `facebook`, `instagram`, `youtube`, `logo`, `favicon`

### TABLE 13: activity_logs
**Purpose**: Tracks admin actions.
*   `user_type`, `user_id`, `action`, `details`, `ip_address`, `created_at`

### TABLE 14: import_history
**Purpose**: Tracks every import operation.
*   `source_type`, `imported_records`, `imported_by` (FK -> admins.id), `import_date`

### TABLE 15: members (Import Table)
**Purpose**: Raw Google Form backup. Never Modify. Keeps original structure exactly.
**Fields (Extracted from Google Form CSV)**:
*   `timestamp`, `are_you_digambar_jain`, `candidate_full_name_first_name_last_name_surname`, `country_code`, `mobile_number_whatsapp`, `birth_date`, `birth_time`, `birth_place`, `native`, `gotra`, `mama_gotra`, `manglik`, `height`, `weight`, `gender`, `permanent_full_address`, `pin_code_of_permanent_address`, `candidate_current_address...`, `email`, `higher_education`, `hobbies`, `your_specific_preference_for_the_partner`, `candidate_monthly_income...`, `widow_divorce`, `handicapped_physical_deficiency`, `language_known`, `candidate_occupation`, `candidate_occupation_company_business_firm_name`, `candidate_occupation_designation`, `father_name`, `father_mobile_number`, `father_monthly_income...`, `father_occupation`, `mother_name`, `mother_mobile_number`, `mother_occupation`, `brothers`, `brothers_married_count...`, `brothers_unmarried_count...`, `sisters`, `sisters_married_count...`, `sisters_unmarried_count...`, `candidate_photo...`, `payment_qr_code...`, `payment_screen_shot...`, `email_address`, `pin_code_of_permanent_address_1`, `profile_photo_path`, `payment_proof_path`

### TABLE 16: import_images
**Purpose**: Maps imported images.
*   `image_type`, `member_name_key`, `file_name`, `file_path`, `file_size_bytes`

---

## Detailed Migration Plan

### Stage 1: Raw Import
1.  **Google Form Export** -> CSV -> `members`
2.  **Images** -> Google Drive -> `import_images`

### Stage 2: Data Validation
Validate: Email, Mobile Number, Birth Date, Gender, Duplicate Profiles, Missing Images. Invalid records remain in `members` and are flagged.

### Stage 3: Migrate to Production
*   `members` -> `users` (Creates matrimonial profiles)
*   `members` -> `user_addresses` (Permanent Address, Current Address, PIN Codes)
*   `members` -> `family_details` (Father, Mother, Sibling Information)
*   `import_images` -> `users` (`profile_photo`, `payment_screenshot`)

### Stage 4: Membership Initialization
Create plans (Basic, Premium, Elite) and insert into `memberships`.

### Stage 5: Admin Review Workflow
New User -> `status = pending` -> Admin Review -> `approved` or `rejected`

### Stage 6: Public Visibility
Only approved users appear in `profiles.php`, `profile-details.php`, search results, and featured profiles.
```sql
SELECT * FROM users WHERE status='approved' AND deleted_at IS NULL AND is_public = TRUE;
```

---

## Final Database Statistics
| Category | Count |
| :--- | :--- |
| Production Tables | 14 |
| Import Tables | 2 |
| **Total Tables** | **16** |

This design gives you a clean production database, preserves all Google Form data, supports your current admin panel and website pages, and allows future migration or expansion without data loss.

*A full SQL script to create this database schema with all required indexes, logic tracking, foreign keys, and soft-delete capabilities has been generated at `database.sql`.*
