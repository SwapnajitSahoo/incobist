 <footer class="incobist-footer">
        <div class="footer-content-wrapper">
            <div class="footer-sections">

                <!-- Brand Section -->
                <div class="footer-section footer-brand-section">
                    <img src="{{ asset('asset/image/logo.png') }}" alt="Incobist Logo" class="footer-logo-image" />
                    <p class="footer-description-text">Join Our Community To Stay up-to-dated With The Latest Technology!</p>

                    <h4 class="footer-subscribe-title">Join Newsletter</h4>
                    <form class="footer-subscribe-form">
                        <input type="email" class="subscribe-input" placeholder="Your Mail" />
                        <button type="submit" class="subscribe-button">Subscribe</button>
                    </form>

                    <h5 class="footer-social-heading">Social Media</h5>
                    <div class="footer-social-links">
                        <a href="https://www.linkedin.com/company/incobist/?viewAsMember=true" class="social-btn social-linkedin"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.twitter.com/incobist2001" class="social-btn social-twitter"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.instagram.com/incobist" class="social-btn social-instagram"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.facebook.com/incobist" class="social-btn social-facebook"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://wa.me/9090138408" target="_blank" class="social-btn social-whatsapp"><i class="fab fa-whatsapp"></i></a>
                        <a href="tel:+916744618289" class="social-btn social-phone"><i class="fas fa-phone"></i></a>
                    </div>
                </div>

                <!-- Industry Links -->
                <div class="footer-section footer-links-section">
                    <h4 class="footer-section-heading">
                        <a href="{{route('industry')}}" style="color: #00baae;">Industry</a>
                    </h4>
                    <ul class="footer-links-list">
                        <li><a href="{{route('high_tech_industry')}}" class="footer-link-item">High Tech</a></li>
                        <li><a href="{{route('healthcare')}}" class="footer-link-item">Healthcare</a></li>
                        <li><a href="{{route('banking')}}" class="footer-link-item">Banking</a></li>
                        <li><a href="{{route('retail')}}" class="footer-link-item">Retail</a></li>
                        <li><a href="{{route('travel')}}" class="footer-link-item">Travel</a></li>
                        <li><a href="{{route('manufacturing')}}" class="footer-link-item">Manufacturing</a></li>
                        <li><a href="{{route('education')}}" class="footer-link-item">Education</a></li>
                        <li><a href="{{route('logistics')}}" class="footer-link-item">Logistics</a></li>
                        <li><a href="{{route('public_sector')}}" class="footer-link-item">Public Sector</a></li>
                    </ul>
                </div>

                <!-- Resources Links -->
                <div class="footer-section footer-courses-section">
                    <h4 class="footer-section-heading">
                        <a href="{{route('resources')}}" style="color: #00baae;">Resources</a>
                    </h4>
                    <ul class="footer-links-list">
                        <li><a href="{{route('insight_blogs')}}" class="footer-link-item">Blogs</a></li>
                        <li><a href="{{route('products_update')}}" class="footer-link-item">Product Updates</a></li>
                        <li><a href="{{route('faq')}}" class="footer-link-item">FAQs</a></li>
                        <li><a href="{{route('media')}}" class="footer-link-item">Media</a></li>
                    </ul>
                </div>

                <!-- Contact Section -->
                <div class="footer-section footer-contact-section">
                    <h4 class="footer-section-heading">Contact Us</h4>
                    <p class="contact-description-text">Join us on this journey of the discover as we explore the latest trend.</p>
                    <div class="footer-contact-icons">
                        <a href="tel:+916744618289" class="contact-btn">
                            <span class="icon-circle"><i class="fas fa-phone"></i></span>
                            Call us: +91-6744618289
                        </a>
                        <a href="mailto:info@incobist.com" class="contact-btn">
                            <span class="icon-circle"><i class="fas fa-envelope"></i></span>
                            Mail: info@incobist.com
                        </a>
                        <a href="https://maps.app.goo.gl/Mc4dUTAJkmGiEacKA?g_st=ac" target="_blank" class="contact-btn">
                            <span class="icon-circle"><i class="fas fa-map-marker-alt"></i></span>
                            Visit Us: Plot no: 61, Sai Saraswati Complex, Chandrashekarpur, 751016
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <div class="footer-copyright">
        <p>© 2025 Incobist. All Rights Reserved. A unit of Incobist India Pvt. Ltd.</p>
        <div class="footer-policy">
            <a href="{{route('privacy-policy')}}">Privacy Policy</a> |
            <a href="{{route('terms-conditions')}}">Terms & Conditions</a> |
            <a href="{{route('refund-policy')}}">Refund Policy</a>
        </div>
    </div>