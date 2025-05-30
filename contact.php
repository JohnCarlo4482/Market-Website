<?php
$title = "Contact";
include 'header.php';
?>

<div class="container">
    <h1 class="title">Contact Us</h1>
    <p class="intro">
        We’d love to hear from you! Whether you have questions about car brands, features, or pricing, or just want to share feedback, 
        feel free to reach out through any of the methods below. Our team is here to assist you.
    </p>

    <h2>Contact Details</h2>
    <ul>
        <li><strong>Email:</strong> <a href="mailto:info@carshowcase.com">info@carshowcase.com</a></li>
        <li><strong>Phone:</strong> +1 (555) 123-4567</li>
        <li><strong>Address:</strong> 123 Car Lane, Motor City</li>
    </ul>

    <h2>Business Hours</h2>
    <p>
        <strong>Monday - Friday:</strong> 9:00 AM - 6:00 PM<br>
        <strong>Saturday:</strong> 10:00 AM - 4:00 PM<br>
        <strong>Sunday:</strong> Closed
    </p>

    <h2>Connect with Us</h2>
    <ul class="social-links">
        <li><a href="#" target="_blank">Facebook</a></li>
        <li><a href="#" target="_blank">Twitter</a></li>
        <li><a href="#" target="_blank">Instagram</a></li>
        <li><a href="#" target="_blank">LinkedIn</a></li>
    </ul>

    <h2>Send Us a Message</h2>
    <form action="send_message.php" method="POST" class="contact-form">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Your Name" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Your Email" required>
        
        <label for="message">Message:</label>
        <textarea id="message" name="message" placeholder="Your Message" rows="5" required></textarea>
        
        <button type="submit">Submit</button>
    </form>
</div>

<?php include 'footer.php'; ?>
