-- Jain Digambar Matrimony - Final Production Database Schema (v1.1)

-- 1. admins
CREATE TABLE admins (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(150) NOT NULL,
    email VARCHAR(150) NOT NULL UNIQUE,
    password_hash VARCHAR(255) NOT NULL,
    role ENUM('super_admin', 'admin', 'moderator') DEFAULT 'admin',
    status BOOLEAN DEFAULT TRUE,
    last_login DATETIME NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

-- 2. users
CREATE TABLE users (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    profile_id VARCHAR(20) UNIQUE,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE,
    mobile VARCHAR(20) NOT NULL,
    country_code VARCHAR(10),
    password_hash VARCHAR(255),
    are_you_digambar_jain ENUM('Yes','No') DEFAULT 'Yes',
    gender ENUM('Male','Female'),
    birth_date DATE,
    birth_time TIME,
    birth_place VARCHAR(255),
    native_place VARCHAR(255),
    gotra VARCHAR(255),
    mama_gotra VARCHAR(255),
    manglik ENUM('Yes','No'),
    height VARCHAR(20),
    weight DECIMAL(5,2),
    marital_status ENUM('Never Married', 'Widow', 'Widower', 'Divorce') DEFAULT 'Never Married',
    handicapped ENUM('Yes','No') DEFAULT 'No',
    higher_education TEXT,
    occupation VARCHAR(255),
    company_name VARCHAR(255),
    designation VARCHAR(255),
    monthly_income DECIMAL(12,2),
    languages TEXT,
    hobbies TEXT,
    partner_preference TEXT,
    profile_photo VARCHAR(255),
    family_photo VARCHAR(255),
    profile_photo_drive_url TEXT,
    payment_screenshot VARCHAR(255),
    payment_proof_drive_url TEXT,
    status ENUM('pending', 'approved', 'rejected') DEFAULT 'pending',
    verified BOOLEAN DEFAULT FALSE,
    approved_by BIGINT UNSIGNED NULL,
    approved_at DATETIME NULL,
    featured_until DATE NULL,
    deleted_at TIMESTAMP NULL,
    registration_source ENUM('website', 'google_form', 'admin') DEFAULT 'website',
    is_public BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (approved_by) REFERENCES admins(id) ON DELETE SET NULL
);

CREATE INDEX idx_users_status ON users(status);
CREATE INDEX idx_users_gender ON users(gender);
CREATE INDEX idx_users_gotra ON users(gotra);
CREATE INDEX idx_users_native_place ON users(native_place);
CREATE INDEX idx_users_marital_status ON users(marital_status);
CREATE INDEX idx_users_mobile ON users(mobile);
CREATE INDEX idx_users_email ON users(email);
CREATE INDEX idx_users_featured_until ON users(featured_until);
CREATE INDEX idx_users_birth_date ON users(birth_date);
CREATE INDEX idx_users_verified ON users(verified);
CREATE INDEX idx_users_is_public ON users(is_public);
CREATE INDEX idx_users_approved_by ON users(approved_by);

-- 3. user_addresses
CREATE TABLE user_addresses (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id BIGINT UNSIGNED NOT NULL,
    permanent_address TEXT,
    permanent_pin_code VARCHAR(20),
    current_address TEXT,
    current_pin_code VARCHAR(20),
    city VARCHAR(100),
    state VARCHAR(100),
    country VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- 4. family_details
CREATE TABLE family_details (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id BIGINT UNSIGNED NOT NULL,
    father_name VARCHAR(255),
    father_mobile VARCHAR(20),
    father_income DECIMAL(12,2),
    father_occupation VARCHAR(255),
    mother_name VARCHAR(255),
    mother_mobile VARCHAR(20),
    mother_occupation VARCHAR(255),
    brothers INT DEFAULT 0,
    brothers_married INT DEFAULT 0,
    brothers_unmarried INT DEFAULT 0,
    sisters INT DEFAULT 0,
    sisters_married INT DEFAULT 0,
    sisters_unmarried INT DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

-- 5. memberships
CREATE TABLE memberships (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    plan_name VARCHAR(100) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    duration_days INT NOT NULL,
    contact_limit INT DEFAULT 0,
    featured_profile BOOLEAN DEFAULT FALSE,
    priority_support BOOLEAN DEFAULT FALSE,
    status BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NULL
);

-- Default Plans
INSERT INTO memberships (plan_name, price, duration_days, contact_limit, featured_profile, priority_support)
VALUES
('Basic', 999, 90, 10, 0, 0),
('Premium', 2499, 180, 50, 1, 1),
('Elite', 4999, 365, 999, 1, 1);

-- 6. user_memberships
CREATE TABLE user_memberships (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id BIGINT UNSIGNED NOT NULL,
    membership_id BIGINT UNSIGNED NOT NULL,
    start_date DATE,
    end_date DATE,
    status ENUM('active', 'expired', 'cancelled') DEFAULT 'active',
    can_view_contacts BOOLEAN DEFAULT FALSE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (membership_id) REFERENCES memberships(id)
);

CREATE UNIQUE INDEX idx_user_membership_active ON user_memberships(user_id, membership_id, status);

-- 7. payments
CREATE TABLE payments (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id BIGINT UNSIGNED NOT NULL,
    membership_id BIGINT UNSIGNED,
    amount DECIMAL(10,2),
    transaction_id VARCHAR(255),
    payment_method VARCHAR(100),
    payment_remarks TEXT,
    payment_screenshot VARCHAR(255),
    status ENUM('pending', 'verified', 'rejected') DEFAULT 'pending',
    verified_by BIGINT UNSIGNED NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (verified_by) REFERENCES admins(id) ON DELETE SET NULL
);

CREATE INDEX idx_payments_status ON payments(status);
CREATE INDEX idx_payments_transaction ON payments(transaction_id);

-- 8. contact_messages
CREATE TABLE contact_messages (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255),
    email VARCHAR(255),
    mobile VARCHAR(20),
    subject VARCHAR(255),
    message TEXT,
    status ENUM('unread', 'read', 'replied') DEFAULT 'unread',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 9. success_stories
CREATE TABLE success_stories (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_id BIGINT UNSIGNED NULL,
    couple_name VARCHAR(255),
    engagement_date DATE,
    marriage_date DATE,
    story LONGTEXT,
    photo VARCHAR(255),
    status ENUM('pending', 'approved') DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE SET NULL
);

-- 10. community_events
CREATE TABLE community_events (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    description LONGTEXT,
    event_date DATE,
    location VARCHAR(255),
    banner VARCHAR(255),
    status BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 11. advertisements
CREATE TABLE advertisements (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255),
    image VARCHAR(255),
    link VARCHAR(255),
    position ENUM('home_top', 'home_bottom', 'sidebar'),
    status BOOLEAN DEFAULT TRUE,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 12. site_settings
CREATE TABLE site_settings (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    site_name VARCHAR(255),
    site_email VARCHAR(255),
    site_phone VARCHAR(50),
    site_address TEXT,
    upi_id VARCHAR(255),
    facebook VARCHAR(255),
    instagram VARCHAR(255),
    youtube VARCHAR(255),
    logo VARCHAR(255),
    favicon VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 13. activity_logs
CREATE TABLE activity_logs (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    user_type ENUM('admin', 'user'),
    user_id BIGINT UNSIGNED,
    action VARCHAR(255),
    details TEXT,
    ip_address VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 14. import_history
CREATE TABLE import_history (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    source_type VARCHAR(50),
    imported_records INT,
    imported_by BIGINT UNSIGNED NULL,
    import_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (imported_by) REFERENCES admins(id) ON DELETE SET NULL
);

-- 15. members (Import Table)
CREATE TABLE members (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    timestamp TEXT,
    are_you_digambar_jain TEXT,
    candidate_full_name_first_name_last_name_surname TEXT,
    country_code TEXT,
    mobile_number_whatsapp TEXT,
    birth_date TEXT,
    birth_time TEXT,
    birth_place TEXT,
    native TEXT,
    gotra TEXT,
    mama_gotra TEXT,
    manglik TEXT,
    height TEXT,
    weight TEXT,
    gender TEXT,
    permanent_full_address TEXT,
    pin_code_of_permanent_address TEXT,
    candidate_current_address_if_your_permanent_address_is_the_same_you_may_write_same_as_above_not_applicable TEXT,
    email TEXT,
    higher_education TEXT,
    hobbies TEXT,
    your_specific_preference_for_the_partner TEXT,
    candidate_monthly_income_only_amount_in_number_ex_100000 TEXT,
    widow_divorce TEXT,
    handicapped_physical_deficiency TEXT,
    language_known TEXT,
    candidate_occupation TEXT,
    candidate_occupation_company_business_firm_name TEXT,
    candidate_occupation_designation TEXT,
    father_name TEXT,
    father_mobile_number TEXT,
    father_monthly_income_only_amount_in_number_ex_100000 TEXT,
    father_occupation TEXT,
    mother_name TEXT,
    mother_mobile_number TEXT,
    mother_occupation TEXT,
    brothers TEXT,
    brothers_married_count_only_number TEXT,
    brothers_unmarried_count_only_number TEXT,
    sisters TEXT,
    sisters_married_count_only_number TEXT,
    sisters_unmarried_count_only_number TEXT,
    candidate_photo_pl_do_not_upload_selfie_10_mb TEXT,
    payment_qr_code_pay_rs_1000_candidate_2_persons_allowed_kindly_mention_mobile_no_in_payment_remarks TEXT,
    payment_screen_shot_attach_a_photo_displaying_the_transaction_id TEXT,
    email_address TEXT,
    pin_code_of_permanent_address_1 TEXT,
    profile_photo_path TEXT,
    payment_proof_path TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- 16. import_images
CREATE TABLE import_images (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    image_type VARCHAR(50) NOT NULL,
    member_name_key VARCHAR(255),
    file_name VARCHAR(255) NOT NULL,
    file_path VARCHAR(500) NOT NULL,
    file_size_bytes BIGINT
);
