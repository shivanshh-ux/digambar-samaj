<!-- success-stories.php -->
<?php include 'includes/header.php'; ?>
<section class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <h1 class="text-4xl md:text-5xl font-bold text-center text-dark mb-12" data-aos="fade-up">Success Stories</h1>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-5xl mx-auto">
            <?php
            $stories = [
                ['Rahul & Priya', 'Mumbai', 'We found each other through Jain Digambar Matrimony. Our families were happy with the match!', 'assets/images/couple1.png'],
                ['Amit & Neha', 'Delhi', 'The platform helped us find our soulmate within the community. Highly recommended!', 'assets/images/couple2.png'],
                ['Sanjay & Meera', 'Jaipur', 'Excellent service with genuine profiles. Thank you for making our dream come true.', 'assets/images/couple3.png'],
                ['Vikas & Anjali', 'Pune', 'A perfect platform for Digambar Jains. We found each other so effortlessly.', 'assets/images/couple4.png'],
                ['Nitin & Pooja', 'Indore', 'Thanks to the advanced search filters, I found someone who perfectly matches my preferences.', 'assets/images/couple5.png'],
                ['Prateek & Sakshi', 'Ahmedabad', 'We connected instantly. It feels like we were meant to be together.', 'assets/images/couple6.png'],
                ['Rohan & Shruti', 'Bangalore', 'Very reliable and trustworthy matrimony service. We are happily married for a year now!', 'assets/images/couple1.png'],
                ['Gaurav & Riya', 'Surat', 'Our parents managed everything through the platform, and the experience was seamless.', 'assets/images/couple2.png'],
                ['Deepak & Sonal', 'Bhopal', 'A wonderful experience. We highly recommend Jain Digambar Matrimony to everyone.', 'assets/images/couple3.png']
            ];
            foreach ($stories as $story): ?>
                <div class="bg-light rounded-lg overflow-hidden shadow-lg" data-aos="fade-up"><img
                        src="<?php echo $story[3]; ?>" alt="Couple" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold"><?php echo $story[0]; ?></h3>
                        <p class="text-primary text-sm mb-2"><?php echo $story[1]; ?></p>
                        <p class="text-gray-600">"<?php echo $story[2]; ?>"</p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php include 'includes/footer.php'; ?>