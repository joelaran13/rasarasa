<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rasa Rasa Sibu - Taste the Comfort</title>
    
    <!-- SEO Meta -->
    <meta name="description" content="Rasa Rasa Sibu - Serving authentic local delights and western fusion. Try our famous Butter Milk Chicken Fried Rice!">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Icons (Lucide implementation via unpkg for standard HTML) -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        body { font-family: 'Outfit', sans-serif; }
        .hero-pattern {
            background-image: url('https://images.unsplash.com/photo-1555126634-323283e090fa?q=80&w=2000&auto=format&fit=crop');
            background-size: cover;
            background-position: center;
        }
    </style>
</head>
<body class="bg-gray-50 text-gray-800 antialiased">

    <!-- Navigation -->
    <nav class="fixed w-full z-50 bg-white/95 backdrop-blur-sm border-b border-gray-100 shadow-sm transition-all duration-300">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <a href="#" class="flex items-center gap-2 group">
                <div class="w-10 h-10 bg-orange-500 rounded-full flex items-center justify-center text-white font-bold text-xl group-hover:bg-orange-600 transition-colors">
                    R
                </div>
                <span class="text-2xl font-bold tracking-tight text-gray-900">Rasa Rasa</span>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-8">
                <a href="#home" class="font-medium text-gray-600 hover:text-orange-500 transition-colors">Home</a>
                <a href="#about" class="font-medium text-gray-600 hover:text-orange-500 transition-colors">About</a>
                <a href="#menu" class="font-medium text-gray-600 hover:text-orange-500 transition-colors">Menu</a>
                <a href="#location" class="font-medium text-gray-600 hover:text-orange-500 transition-colors">Location</a>
                <a href="tel:+6084-320420" class="px-5 py-2 bg-gray-900 hover:bg-orange-500 text-white rounded-full font-semibold transition-all">
                    Call Us
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button class="md:hidden text-gray-800" onclick="document.getElementById('mobile-menu').classList.toggle('hidden')">
                <i data-lucide="menu" class="w-7 h-7"></i>
            </button>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100">
            <div class="flex flex-col p-4 space-y-3">
                <a href="#home" class="block py-2 text-gray-700 font-medium">Home</a>
                <a href="#menu" class="block py-2 text-gray-700 font-medium">Menu</a>
                <a href="#location" class="block py-2 text-gray-700 font-medium">Location</a>
                <a href="#contact" class="block w-full text-center py-3 bg-orange-500 text-white rounded-lg font-bold">Book a Table</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="relative h-screen min-h-[600px] flex items-center justify-center hero-pattern text-white">
        <div class="absolute inset-0 bg-gradient-to-r from-black/80 to-black/40"></div>
        
        <div class="relative z-10 container mx-auto px-4 text-center">
            <div class="inline-flex items-center gap-2 px-4 py-2 bg-orange-500/20 border border-orange-500/40 rounded-full text-orange-300 mb-6 backdrop-blur-sm">
                <i data-lucide="star" class="w-4 h-4 fill-current"></i>
                <span class="text-sm font-bold uppercase tracking-wider">Top Rated in Sibu</span>
            </div>
            
            <h1 class="text-5xl md:text-7xl font-extrabold mb-6 leading-tight">
                Where Local Flavor <br />
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-400 to-yellow-400">
                    Meets Comfort
                </span>
            </h1>
            
            <p class="text-gray-300 text-lg md:text-xl max-w-2xl mx-auto mb-10 leading-relaxed font-light">
                From creamy Butter Chicken to spicy Nasi Lemak, experience the vibrant tastes of Sarawak tailored for your soul.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#menu" class="px-8 py-4 bg-orange-500 hover:bg-orange-600 text-white rounded-full font-bold text-lg transition-transform hover:-translate-y-1 shadow-lg shadow-orange-500/30 flex items-center justify-center gap-2">
                    View Menu <i data-lucide="utensils" class="w-5 h-5"></i>
                </a>
                <a href="#location" class="px-8 py-4 bg-white/10 hover:bg-white/20 text-white border border-white/30 rounded-full font-bold text-lg transition-all backdrop-blur-sm flex items-center justify-center gap-2">
                    Find Us <i data-lucide="map-pin" class="w-5 h-5"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-white border-b border-gray-100">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-3 gap-8">
                <div class="p-6 rounded-2xl bg-orange-50/50 border border-orange-100 hover:shadow-lg transition-all text-center group">
                    <div class="w-16 h-16 bg-white rounded-full shadow-sm flex items-center justify-center mx-auto mb-4 text-orange-500 group-hover:scale-110 transition-transform">
                        <i data-lucide="chef-hat" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Authentic Recipes</h3>
                    <p class="text-gray-600 text-sm">Home-style cooking with our signature Sambal and secret sauces passed down through generations.</p>
                </div>
                <div class="p-6 rounded-2xl bg-orange-50/50 border border-orange-100 hover:shadow-lg transition-all text-center group">
                    <div class="w-16 h-16 bg-white rounded-full shadow-sm flex items-center justify-center mx-auto mb-4 text-orange-500 group-hover:scale-110 transition-transform">
                        <i data-lucide="check-circle-2" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Halal Friendly</h3>
                    <p class="text-gray-600 text-sm">Served with no pork and no lard, featuring fresh ingredients suitable for everyone to enjoy.</p>
                </div>
                <div class="p-6 rounded-2xl bg-orange-50/50 border border-orange-100 hover:shadow-lg transition-all text-center group">
                    <div class="w-16 h-16 bg-white rounded-full shadow-sm flex items-center justify-center mx-auto mb-4 text-orange-500 group-hover:scale-110 transition-transform">
                        <i data-lucide="users" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Family Friendly</h3>
                    <p class="text-gray-600 text-sm">A cozy, welcoming ambiance perfect for family dinners or hanging out with friends.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Section (HTML) -->
    <section id="menu" class="py-24 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <span class="text-orange-600 font-bold tracking-wider uppercase text-xs mb-2 block">Our Kitchen</span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900">Menu Highlights</h2>
                <div class="w-20 h-1 bg-orange-500 mx-auto mt-6 rounded-full"></div>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Signatures -->
                <div class="bg-white rounded-3xl p-8 shadow-sm border border-gray-100 hover:shadow-md transition-shadow h-full">
                    <div class="flex items-center gap-3 mb-8 pb-4 border-b border-gray-100">
                        <div class="p-2 bg-orange-100 rounded-lg text-orange-600">
                            <i data-lucide="flame" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800">Signatures</h3>
                    </div>

                    <div class="space-y-8">
                        <div class="group">
                            <div class="flex justify-between items-start mb-2">
                                <div>
                                    <div class="flex items-center gap-2">
                                        <h4 class="font-bold text-gray-900 text-lg group-hover:text-orange-600 transition-colors">
                                            Creamy Butter Milk Chicken Fried Rice
                                        </h4>
                                        <span class="bg-red-50 text-red-600 text-[10px] font-extrabold px-2 py-0.5 rounded-full uppercase tracking-wide border border-red-100">
                                            Hot
                                        </span>
                                    </div>
                                </div>
                                <span class="font-bold text-orange-600 whitespace-nowrap">RM 14.90</span>
                            </div>
                            <p class="text-gray-500 text-sm leading-relaxed mb-3">Rich, creamy, savory, and just the right amount of indulgent. A crowd favorite.</p>
                        </div>

                        <div class="group">
                            <div class="flex justify-between items-start mb-2">
                                <div>
                                    <div class="flex items-center gap-2">
                                        <h4 class="font-bold text-gray-900 text-lg group-hover:text-orange-600 transition-colors">
                                            Nasi Lemak Ayam Berempah
                                        </h4>
                                        <span class="bg-red-50 text-red-600 text-[10px] font-extrabold px-2 py-0.5 rounded-full uppercase tracking-wide border border-red-100">
                                            Hot
                                        </span>
                                    </div>
                                </div>
                                <span class="font-bold text-orange-600 whitespace-nowrap">RM 19.90</span>
                            </div>
                            <p class="text-gray-500 text-sm leading-relaxed mb-3">Fragrant coconut rice served with spiced fried chicken, sambal, peanuts, and cucumber.</p>
                        </div>

                        <div class="group">
                            <div class="flex justify-between items-start mb-2">
                                <div>
                                    <div class="flex items-center gap-2">
                                        <h4 class="font-bold text-gray-900 text-lg group-hover:text-orange-600 transition-colors">
                                            Fried Chicken Skin
                                        </h4>
                                    </div>
                                </div>
                                <span class="font-bold text-orange-600 whitespace-nowrap">RM 12.00</span>
                            </div>
                            <p class="text-gray-500 text-sm leading-relaxed mb-3">Crunchy, golden brown snack. Irresistibly savory and addictive.</p>
                        </div>
                    </div>
                </div>

                <!-- Western Fusion -->
                <div class="bg-white rounded-3xl p-8 shadow-sm border border-gray-100 hover:shadow-md transition-shadow h-full">
                    <div class="flex items-center gap-3 mb-8 pb-4 border-b border-gray-100">
                        <div class="p-2 bg-orange-100 rounded-lg text-orange-600">
                            <i data-lucide="globe" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800">Western Fusion</h3>
                    </div>

                    <div class="space-y-8">
                        <div class="group">
                            <div class="flex justify-between items-start mb-2">
                                <div>
                                    <div class="flex items-center gap-2">
                                        <h4 class="font-bold text-gray-900 text-lg group-hover:text-orange-600 transition-colors">
                                            Chicken Chop Salted Egg Sauce
                                        </h4>
                                        <span class="bg-red-50 text-red-600 text-[10px] font-extrabold px-2 py-0.5 rounded-full uppercase tracking-wide border border-red-100">
                                            Hot
                                        </span>
                                    </div>
                                </div>
                                <span class="font-bold text-orange-600 whitespace-nowrap">RM 21.90</span>
                            </div>
                            <p class="text-gray-500 text-sm leading-relaxed mb-3">Crispy chicken chop smothered in luscious, creamy salted egg yolk sauce.</p>
                        </div>

                        <div class="group">
                            <div class="flex justify-between items-start mb-2">
                                <div>
                                    <div class="flex items-center gap-2">
                                        <h4 class="font-bold text-gray-900 text-lg group-hover:text-orange-600 transition-colors">
                                            Aglio Olio Ayam Madu
                                        </h4>
                                    </div>
                                </div>
                                <span class="font-bold text-orange-600 whitespace-nowrap">RM 22.90</span>
                            </div>
                            <p class="text-gray-500 text-sm leading-relaxed mb-3">Spaghetti tossed in garlic oil, topped with honey-glazed grilled chicken.</p>
                        </div>

                        <div class="group">
                            <div class="flex justify-between items-start mb-2">
                                <div>
                                    <div class="flex items-center gap-2">
                                        <h4 class="font-bold text-gray-900 text-lg group-hover:text-orange-600 transition-colors">
                                            Fish & Chips
                                        </h4>
                                    </div>
                                </div>
                                <span class="font-bold text-orange-600 whitespace-nowrap">RM 23.90</span>
                            </div>
                            <p class="text-gray-500 text-sm leading-relaxed mb-3">Crispy battered fish fillets served with fries and tartar sauce.</p>
                        </div>
                    </div>
                </div>

                <!-- Local Delights -->
                <div class="bg-white rounded-3xl p-8 shadow-sm border border-gray-100 hover:shadow-md transition-shadow h-full">
                    <div class="flex items-center gap-3 mb-8 pb-4 border-b border-gray-100">
                        <div class="p-2 bg-orange-100 rounded-lg text-orange-600">
                            <i data-lucide="utensils" class="w-6 h-6"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-gray-800">Local Delights</h3>
                    </div>

                    <div class="space-y-8">
                        <div class="group">
                            <div class="flex justify-between items-start mb-2">
                                <div>
                                    <div class="flex items-center gap-2">
                                        <h4 class="font-bold text-gray-900 text-lg group-hover:text-orange-600 transition-colors">
                                            Nasi Ayam Penyet
                                        </h4>
                                        <span class="bg-red-50 text-red-600 text-[10px] font-extrabold px-2 py-0.5 rounded-full uppercase tracking-wide border border-red-100">
                                            Hot
                                        </span>
                                    </div>
                                </div>
                                <span class="font-bold text-orange-600 whitespace-nowrap">RM 12.90</span>
                            </div>
                            <p class="text-gray-500 text-sm leading-relaxed mb-3">Smashed fried chicken served with white rice, spicy sambal, tofu, and tempeh.</p>
                        </div>

                        <div class="group">
                            <div class="flex justify-between items-start mb-2">
                                <div>
                                    <div class="flex items-center gap-2">
                                        <h4 class="font-bold text-gray-900 text-lg group-hover:text-orange-600 transition-colors">
                                            Nasi Goreng Ubi + Ayam
                                        </h4>
                                    </div>
                                </div>
                                <span class="font-bold text-orange-600 whitespace-nowrap">RM 16.90</span>
                            </div>
                            <p class="text-gray-500 text-sm leading-relaxed mb-3">Unique sweet potato fried rice paired with crispy fried chicken.</p>
                        </div>
                    </div>
                </div>

            </div>
            
            <div class="mt-12 text-center">
                <a href="#" class="inline-flex items-center gap-2 text-gray-500 hover:text-orange-600 font-medium transition-colors">
                    See full menu on FoodPanda <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-20 bg-white relative overflow-hidden">
        <div class="container mx-auto px-4 relative z-10">
            <div class="flex flex-col lg:flex-row items-center gap-16">
                <div class="lg:w-1/2">
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl rotate-2 hover:rotate-0 transition-all duration-500">
                        <img src="https://images.unsplash.com/photo-1626804475297-411d8c66000e?q=80&w=2070&auto=format&fit=crop" alt="Rasa Rasa Food" class="w-full h-[500px] object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex items-end p-8">
                            <div class="text-white">
                                <p class="font-bold text-2xl mb-1">Made with Love</p>
                                <p class="text-gray-200">Every dish tells a story of Sarawakian heritage.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lg:w-1/2">
                    <span class="text-orange-500 font-bold tracking-wider uppercase text-sm">About Us</span>
                    <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mt-2 mb-8">Simple Food, <br/>Big Flavors</h2>
                    <p class="text-gray-600 text-lg leading-relaxed mb-6">
                        Located in the heart of Sibu, <strong>Rasa Rasa</strong> brings you a culinary experience that feels like home. We believe that good food shouldn't be complicated—it should just be delicious.
                    </p>
                    <p class="text-gray-600 text-lg leading-relaxed mb-8">
                        Whether you're craving the spicy kick of our signature Nasi Lemak, the comforting creaminess of our Butter Chicken, or a hearty Western plate, our kitchen prepares every dish with passion and fresh ingredients.
                    </p>
                    
                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-6 pt-6 border-t border-gray-100">
                        <div>
                            <p class="text-3xl font-bold text-gray-900">4.5</p>
                            <p class="text-xs uppercase text-gray-500 font-bold mt-1">Rating</p>
                        </div>
                        <div>
                            <p class="text-3xl font-bold text-gray-900">50+</p>
                            <p class="text-xs uppercase text-gray-500 font-bold mt-1">Dishes</p>
                        </div>
                        <div>
                            <p class="text-3xl font-bold text-gray-900">100%</p>
                            <p class="text-xs uppercase text-gray-500 font-bold mt-1">Satisfaction</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Location & Contact -->
    <section id="location" class="bg-gray-900 text-white py-24">
        <div class="container mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-16">
                <!-- Info -->
                <div>
                    <h2 class="text-4xl font-bold mb-2">Visit Us</h2>
                    <p class="text-gray-400 mb-10 text-lg">Come taste the difference today.</p>

                    <div class="space-y-8">
                        <div class="flex gap-6">
                            <div class="w-12 h-12 rounded-xl bg-gray-800 flex items-center justify-center flex-shrink-0 text-orange-500">
                                <i data-lucide="map-pin" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold mb-1">Our Address</h3>
                                <p class="text-gray-400 mb-2">Jalan Dr Wong Soon Kai, 96000 Sibu, Sarawak</p>
                                <a href="https://www.google.com/maps/place/Rasa+Rasa/@2.3430626,111.8392346,17.83z" target="_blank" class="text-orange-400 text-sm font-semibold hover:underline flex items-center gap-1">
                                    Get Directions <i data-lucide="external-link" class="w-3 h-3"></i>
                                </a>
                            </div>
                        </div>

                        <div class="flex gap-6">
                            <div class="w-12 h-12 rounded-xl bg-gray-800 flex items-center justify-center flex-shrink-0 text-orange-500">
                                <i data-lucide="clock" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold mb-1">Opening Hours</h3>
                                <p class="text-gray-400">Weekdays: 10:00 AM - 8:00 PM</p>
                                <p class="text-gray-400">Weekends: 10:00 AM - 7:30 PM</p>
                            </div>
                        </div>

                        <div class="flex gap-6">
                            <div class="w-12 h-12 rounded-xl bg-gray-800 flex items-center justify-center flex-shrink-0 text-orange-500">
                                <i data-lucide="phone" class="w-6 h-6"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-bold mb-1">Contact</h3>
                                <p class="text-gray-400 mb-1">Reservations & Takeaway</p>
                                <a href="tel:+6084-320420" class="text-2xl font-bold text-white hover:text-orange-400 transition-colors">+60 84-320 420</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form / Map Box -->
                <div class="bg-white rounded-3xl p-8 text-gray-900 shadow-xl">
                    <div id="form-container">
                        <h3 class="text-2xl font-bold mb-6">Send us a message</h3>
                        <form id="contactForm" onsubmit="event.preventDefault(); document.getElementById('form-container').classList.add('hidden'); document.getElementById('success-message').classList.remove('hidden');" class="space-y-4">
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Name</label>
                                <input type="text" name="name" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 outline-none transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Phone / Email</label>
                                <input type="text" name="contact" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 outline-none transition-all">
                            </div>
                            <div>
                                <label class="block text-sm font-semibold text-gray-700 mb-1">Message</label>
                                <textarea name="message" rows="4" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-orange-500 focus:ring-2 focus:ring-orange-200 outline-none transition-all"></textarea>
                            </div>
                            <button type="submit" class="w-full bg-orange-500 hover:bg-orange-600 text-white font-bold py-4 rounded-xl transition-all transform active:scale-95 shadow-lg shadow-orange-500/20">
                                Send Message
                            </button>
                        </form>
                    </div>

                    <!-- Success Message (Hidden by default) -->
                    <div id="success-message" class="hidden h-full flex flex-col items-center justify-center text-center py-10">
                        <div class="w-20 h-20 bg-green-100 text-green-600 rounded-full flex items-center justify-center mb-6">
                            <i data-lucide="check" class="w-10 h-10"></i>
                        </div>
                        <h3 class="text-2xl font-bold mb-2">Message Sent!</h3>
                        <p class="text-gray-600">Thanks for contacting us. We'll get back to you shortly.</p>
                        <button onclick="document.getElementById('form-container').classList.remove('hidden'); document.getElementById('success-message').classList.add('hidden');" class="mt-6 text-orange-500 font-semibold text-sm hover:underline">
                            Send another message
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-950 text-gray-500 py-12 border-t border-gray-900 text-center md:text-left">
        <div class="container mx-auto px-4 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 bg-orange-600 rounded-full flex items-center justify-center text-white font-bold">R</div>
                <span class="text-xl font-bold text-white">Rasa Rasa</span>
            </div>
            <p class="text-sm">
                &copy; 2024 Rasa Rasa. All rights reserved.
            </p>
        </div>
    </footer>

    <!-- Initialize Icons -->
    <script>
        lucide.createIcons();
    </script>
</body>
</html>
