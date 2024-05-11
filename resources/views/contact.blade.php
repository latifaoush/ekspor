<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        .social-links {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }
        .social-links li {
            list-style: none;
        }
        .contact-box {
            padding: 15px;
        }
    </style>
</head>
<body class="bg-gray-100">
    <header class="bg-white text-black py-6 px-4 md:px-8 flex justify-between items-center">
        <div class="flex items-center">
            <img src="/images/nopal.jpg" alt="Logo" class="w-12 h-12 rounded-full mr-2">
            <h1 class="text-lg font-bold"></h1>
        </div>
        <nav>
            <ul class="flex">
                <li><a href="/" class="text-gray-800 hover:text-black mr-4">Home</a></li>
                <li><a href="/about" class="text-gray-800 hover:text-black mr-4">About Us</a></li>
                <li><a href="/products" class="text-gray-800 hover:text-black mr-4">Product</a></li>
                <li><a href="/contact" class="text-gray-800 hover:text-black font-bold mr-4">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <div class="container mx-auto px-4 md:px-8">
        <h1 class="text-3xl font-bold text-center mt-8">Contact Us</h1>
        <div class="contact-info flex flex-col md:flex-row justify-between mt-8">
            <div class="contact-box bg-blue-300 p-4 rounded-lg shadow-md mb-8 md:mb-0 md:w-1/2">
                <h2 class="text-xl font-semibold mb-2">Contact Information</h2>
                <div class="contact-box bg-blue-300 p-4 rounded-lg shadow-md mb-8 md:mb-0 md:w-1/2">
                    <h2 class="text-xl font-semibold mb-2">Contact Information</h2>
                    <p><strong><i class="fas fa-phone-alt"></i></strong> <a href="tel:+1234567890" class="text-blue-800 hover:underline">+1234567890</a></p>
                    <p><strong><i class="fab fa-whatsapp"></i></strong> <a href="https://wa.me/1234567890" class="text-blue-800 hover:underline">WhatsApp</a></p>
                    <p><strong><i class="far fa-envelope"></i></strong> <a href="mailto:info@yourwebsite.com" class="text-blue-800 hover:underline">Email</a></p>
                    <p><strong><i class="fas fa-map-marker-alt"></i></strong> 123 Main Street, City, Country</p>
                </div>
                
            </div>
            <div class="contact-box bg-blue-300 p-4 rounded-lg shadow-md md:w-1/2">
    <h2 class="text-xl font-semibold mb-2">Follow Us</h2>
    <ul class="social-links flex flex-row">
        <li class="mr-4"><a href="https://facebook.com/yourwebsite" target="_blank" class="text-blue-800 hover:underline"><i class="fab fa-facebook-f text-2xl"></i> Facebook</a></li>
        <li class="mr-4"><a href="https://twitter.com/yourwebsite" target="_blank" class="text-blue-800 hover:underline"><i class="fab fa-twitter text-2xl"></i> Twitter</a></li>
        <li><a href="https://instagram.com/yourwebsite" target="_blank" class="text-blue-800 hover:underline"><i class="fab fa-instagram text-2xl"></i> Instagram</a></li>
    </ul>
</div>

        </div>
        
        <!-- Google Maps -->
        <div class="map-container mt-8 rounded-lg overflow-hidden mx-auto">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.145095631382!2d104.05330731525574!3d1.1293426991216738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d9890f4063bf6b%3A0x6ddfa519f79fed7c!2sMega%20Mall%20Batam%20Centre!5e0!3m2!1sen!2sid!4v1649966482936!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>

    <footer class="bg-blue-300 text-black text-center py-4 mt-8">
        <p>&copy; <?php echo date("Y"); ?> YourWebsite. All rights reserved.</p>
    </footer>
</body>
</html>
