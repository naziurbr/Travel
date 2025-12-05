  </main>

  <!-- Premium Footer -->
  <footer class="footer">
    <div class="container">
      <!-- Footer Wave Decoration -->
      <div class="footer-wave">
        <svg viewBox="0 0 1200 120" preserveAspectRatio="none">
          <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" fill="var(--sunset-gold)"></path>
          <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" fill="var(--horizon-cyan)"></path>
          <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" fill="var(--deep-ocean-blue)"></path>
        </svg>
      </div>

      <!-- Main Footer Content -->
      <div class="footer-content">
        <!-- Brand Column -->
        <div class="footer-column">
          <div class="footer-brand">
            <a href="index.php?page=home" class="footer-logo">
              <i class="fas fa-globe-americas logo-icon"></i>
              <div class="logo-text">
                <span class="logo-main">Travelers of</span>
                <span class="logo-accent">Destination</span>
              </div>
            </a>
            <p class="footer-tagline">Discover the world with premium travel experiences tailored just for you.</p>
            
            <!-- Newsletter Subscription -->
            <div class="newsletter">
              <h4>Stay Updated</h4>
              <p>Subscribe to our newsletter for exclusive deals and travel tips.</p>
              <form class="newsletter-form" id="newsletterForm">
                <div class="input-group">
                  <input type="email" class="newsletter-input" placeholder="Your email address" required>
                  <button type="submit" class="newsletter-btn">
                    <i class="fas fa-paper-plane"></i>
                  </button>
                </div>
                <div class="form-success" id="newsletterSuccess" style="display: none;">
                  <i class="fas fa-check-circle"></i>
                  <span>Thank you for subscribing!</span>
                </div>
              </form>
            </div>
          </div>
        </div>

        <!-- Quick Links Column -->
        <div class="footer-column">
          <h3 class="footer-heading">Quick Links</h3>
          <ul class="footer-links">
            <li><a href="index.php?page=home"><i class="fas fa-chevron-right"></i> Home</a></li>
            <li><a href="index.php?page=packages"><i class="fas fa-chevron-right"></i> Holiday Packages</a></li>
            <li><a href="index.php?page=flights"><i class="fas fa-chevron-right"></i> Flights</a></li>
            <li><a href="index.php?page=hotels"><i class="fas fa-chevron-right"></i> Hotels</a></li>
            <li><a href="index.php?page=visa"><i class="fas fa-chevron-right"></i> Visa Services</a></li>
            <li><a href="index.php?page=about"><i class="fas fa-chevron-right"></i> About Us</a></li>
            <li><a href="index.php?page=contact"><i class="fas fa-chevron-right"></i> Contact</a></li>
          </ul>
        </div>

        <!-- Destinations Column -->
        <div class="footer-column">
          <h3 class="footer-heading">Popular Destinations</h3>
          <ul class="footer-destinations">
            <li>
              <a href="index.php?page=packages&destination=bali">
                <img src="<?= APP_URL ?>/public/images/destinations/bali-thumb.jpg" alt="Bali" class="destination-thumb" style="width: 60px; height: 60px; object-fit: cover; border-radius: 8px;">
                <span class="destination-name">Bali, Indonesia</span>
              </a>
            </li>
            <li>
              <a href="index.php?page=packages&destination=santorini">
                <img src="<?= APP_URL ?>/public/images/destinations/santorini-thumb.jpg" alt="Santorini" class="destination-thumb" style="width: 60px; height: 60px; object-fit: cover; border-radius: 8px;">
                <span class="destination-name">Santorini, Greece</span>
              </a>
            </li>
            <li>
              <a href="index.php?page=packages&destination=maldives">
                <img src="<?= APP_URL ?>/public/images/destinations/maldives-thumb.jpg" alt="Maldives" class="destination-thumb" style="width: 60px; height: 60px; object-fit: cover; border-radius: 8px;">
                <span class="destination-name">Maldives</span>
              </a>
            </li>
            <li>
              <a href="index.php?page=packages&destination=switzerland">
                <img src="<?= APP_URL ?>/public/images/destinations/switzerland-thumb.jpg" alt="Switzerland" class="destination-thumb" style="width: 60px; height: 60px; object-fit: cover; border-radius: 8px;">
                <span class="destination-name">Swiss Alps</span>
              </a>
            </li>
          </ul>
        </div>

        <!-- Contact Column -->
        <div class="footer-column">
          <h3 class="footer-heading">Contact Us</h3>
          <div class="footer-contact">
            <div class="contact-item">
              <i class="fas fa-map-marker-alt contact-icon"></i>
              <div>
                <strong>Head Office</strong>
                <p>123 Luxury Avenue, Travel District<br>City, Country 12345</p>
              </div>
            </div>
            
            <div class="contact-item">
              <i class="fas fa-phone contact-icon"></i>
              <div>
                <strong>Call Us</strong>
                <p>+1 (555) 123-4567<br>+1 (555) 987-6543</p>
              </div>
            </div>
            
            <div class="contact-item">
              <i class="fas fa-envelope contact-icon"></i>
              <div>
                <strong>Email</strong>
                <p>info@travelersofdestination.com<br>support@travelersofdestination.com</p>
              </div>
            </div>
            
            <div class="contact-item">
              <i class="fas fa-clock contact-icon"></i>
              <div>
                <strong>Business Hours</strong>
                <p>Mon-Fri: 9:00 AM - 8:00 PM<br>Sat-Sun: 10:00 AM - 6:00 PM</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Social Media & Payment Methods -->
      <div class="footer-middle">
        <div class="footer-middle-content">
          <!-- Social Media -->
          <div class="social-section">
            <h4>Follow Our Journey</h4>
            <div class="social-links">
              <a href="https://facebook.com" class="social-icon" target="_blank" rel="noopener">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://twitter.com" class="social-icon" target="_blank" rel="noopener">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://instagram.com" class="social-icon" target="_blank" rel="noopener">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="https://pinterest.com" class="social-icon" target="_blank" rel="noopener">
                <i class="fab fa-pinterest-p"></i>
              </a>
              <a href="https://youtube.com" class="social-icon" target="_blank" rel="noopener">
                <i class="fab fa-youtube"></i>
              </a>
              <a href="https://linkedin.com" class="social-icon" target="_blank" rel="noopener">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>

          <!-- Payment Methods -->
          <div class="payment-section">
            <h4>Secure Payments</h4>
            <div class="payment-methods">
              <i class="fab fa-cc-visa payment-icon"></i>
              <i class="fab fa-cc-mastercard payment-icon"></i>
              <i class="fab fa-cc-amex payment-icon"></i>
              <i class="fab fa-cc-paypal payment-icon"></i>
              <i class="fab fa-cc-apple-pay payment-icon"></i>
              <i class="fab fa-cc-stripe payment-icon"></i>
            </div>
          </div>
        </div>
      </div>

      <!-- Copyright & Legal -->
      <div class="footer-bottom">
        <div class="footer-bottom-content">
          <!-- Copyright -->
          <div class="copyright">
            <p>&copy; <?= date('Y') ?> <strong>Travelers of Destination</strong>. All rights reserved.</p>
            <p class="copyright-note">Premium Travel Services Since 2010</p>
          </div>

          <!-- Legal Links -->
          <div class="legal-links">
            <a href="index.php?page=privacy">Privacy Policy</a>
            <span class="separator">|</span>
            <a href="index.php?page=terms">Terms of Service</a>
            <span class="separator">|</span>
            <a href="index.php?page=cookies">Cookie Policy</a>
            <span class="separator">|</span>
            <a href="index.php?page=sitemap">Sitemap</a>
            <span class="separator">|</span>
            <a href="index.php?page=faq">FAQ</a>
          </div>

          <!-- Back to Top -->
          <button class="back-to-top" id="backToTop" style="display: none;">
            <i class="fas fa-arrow-up"></i>
            <span>Back to Top</span>
          </button>
        </div>
      </div>
    </div>
  </footer>

  <!-- Essential JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="<?= APP_URL ?>/public/js/main.js?v=<?= time() ?>"></script>
  
  <!-- Initialize Basic Functionality -->
  <script>
  // Ensure jQuery is loaded
  if (typeof jQuery === 'undefined') {
    document.write('<script src="https://code.jquery.com/jquery-3.6.0.min.js"><\/script>');
  }
  
  // Basic theme toggle
  document.addEventListener('DOMContentLoaded', function() {
    console.log('Page loaded successfully');
    
    // Simple theme toggle
    const themeToggle = document.getElementById('themeToggle');
    if (themeToggle) {
      themeToggle.addEventListener('click', function() {
        const html = document.documentElement;
        const currentTheme = html.getAttribute('data-theme');
        const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
        html.setAttribute('data-theme', newTheme);
        localStorage.setItem('theme', newTheme);
        alert('Theme switched to ' + newTheme + ' mode');
      });
    }
    
    // Mobile theme toggle
    const mobileThemeToggle = document.getElementById('mobileThemeToggle');
    if (mobileThemeToggle) {
      mobileThemeToggle.addEventListener('click', function() {
        const html = document.documentElement;
        const currentTheme = html.getAttribute('data-theme');
        const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
        html.setAttribute('data-theme', newTheme);
        localStorage.setItem('theme', newTheme);
      });
    }
    
    // Back to Top Button
    const backToTopBtn = document.getElementById('backToTop');
    if (backToTopBtn) {
      backToTopBtn.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
      });

      window.addEventListener('scroll', () => {
        if (window.pageYOffset > 300) {
          backToTopBtn.style.display = 'flex';
        } else {
          backToTopBtn.style.display = 'none';
        }
      });
    }
    
    // Newsletter Form
    const newsletterForm = document.getElementById('newsletterForm');
    if (newsletterForm) {
      newsletterForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const emailInput = newsletterForm.querySelector('.newsletter-input');
        const successMessage = document.getElementById('newsletterSuccess');
        
        // Simulate subscription
        if (emailInput.value) {
          newsletterForm.style.display = 'none';
          successMessage.style.display = 'flex';
          
          // Reset form after 5 seconds
          setTimeout(() => {
            newsletterForm.style.display = 'block';
            successMessage.style.display = 'none';
            emailInput.value = '';
          }, 5000);
        }
      });
    }
    
    // Hide loading screen
    const loadingScreen = document.getElementById('loading');
    if (loadingScreen) {
      setTimeout(() => {
        loadingScreen.style.display = 'none';
      }, 1000);
    }
  });
  </script>
</body>
</html>