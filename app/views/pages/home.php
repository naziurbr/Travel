<!-- Hero Section -->
<section class="hero" data-parallax="vertical" data-parallax-rate="0.3">
  <div class="hero-bg"></div>
  <div class="container">
    <div class="hero-content scroll-animate" data-stagger="true">
      <div class="hero-badge">
        <span class="badge">
          <i class="fas fa-crown"></i>
          Premium Travel Since 2010
        </span>
      </div>
      
      <h1 class="hero-title">
        Discover <span class="text-gradient">Extraordinary</span><br>
        Travel Experiences
      </h1>
      
      <p class="hero-subtitle">
        Curated luxury journeys to the world's most breathtaking destinations.<br>
        Experience travel redefined with our premium service.
      </p>
      
      <div class="hero-buttons">
        <a href="index.php?page=packages" class="btn btn-primary">
          <i class="fas fa-suitcase"></i>
          Explore Packages
        </a>
        <a href="index.php?page=contact" class="btn btn-secondary">
          <i class="fas fa-calendar-alt"></i>
          Book Consultation
        </a>
      </div>
      
      <!-- Hero Stats -->
      <div class="hero-stats">
        <div class="stat-item">
          <div class="stat-number" data-count="5000">0</div>
          <div class="stat-label">Happy Travelers</div>
        </div>
        <div class="stat-item">
          <div class="stat-number" data-count="150">0</div>
          <div class="stat-label">Destinations</div>
        </div>
        <div class="stat-item">
          <div class="stat-number" data-count="98">0</div>
          <div class="stat-label">Satisfaction Rate</div>
        </div>
        <div class="stat-item">
          <div class="stat-number" data-count="24">0</div>
          <div class="stat-label">/7 Support</div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Scroll Indicator -->
  <div class="scroll-indicator">
    <div class="mouse">
      <div class="wheel"></div>
    </div>
    <div class="arrow">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
</section>

<!-- Why Choose Us -->
<section class="section why-us-section">
  <div class="container">
    <div class="section-header scroll-animate">
      <span class="section-subtitle">Why Choose Us</span>
      <h2 class="section-title">Experience The Difference</h2>
      <p class="section-description">
        We redefine luxury travel with personalized service, exclusive access, and attention to every detail.
      </p>
    </div>
    
    <div class="grid grid-4">
      <div class="feature-card scroll-animate stagger-item">
        <div class="feature-icon">
          <i class="fas fa-award"></i>
        </div>
        <h3>Premium Quality</h3>
        <p>Curated experiences with only the finest accommodations and services.</p>
      </div>
      
      <div class="feature-card scroll-animate stagger-item">
        <div class="feature-icon">
          <i class="fas fa-user-shield"></i>
        </div>
        <h3>Personalized Service</h3>
        <p>Dedicated travel concierge for every client, 24/7 support during your journey.</p>
      </div>
      
      <div class="feature-card scroll-animate stagger-item">
        <div class="feature-icon">
          <i class="fas fa-lock"></i>
        </div>
        <h3>Secure & Flexible</h3>
        <p>Flexible booking options and comprehensive travel insurance included.</p>
      </div>
      
      <div class="feature-card scroll-animate stagger-item">
        <div class="feature-icon">
          <i class="fas fa-globe-americas"></i>
        </div>
        <h3>Global Network</h3>
        <p>Access to exclusive destinations and experiences through our global partners.</p>
      </div>
    </div>
  </div>
</section>

<!-- Popular Packages -->
<section class="section packages-section">
  <div class="container">
    <div class="section-header scroll-animate">
      <span class="section-subtitle">Curated Selection</span>
      <h2 class="section-title">Popular Packages</h2>
      <p class="section-description">
        Our most sought-after luxury travel experiences, carefully designed for unforgettable memories.
      </p>
    </div>
    
    <!-- Package Filter -->
    <div class="package-filter scroll-animate">
      <div class="filter-buttons">
        <button class="filter-btn active" data-category="all">All Packages</button>
        <button class="filter-btn" data-category="luxury">Luxury</button>
        <button class="filter-btn" data-category="adventure">Adventure</button>
        <button class="filter-btn" data-category="beach">Beach</button>
        <button class="filter-btn" data-category="cultural">Cultural</button>
      </div>
    </div>
    
    <!-- Packages Grid -->
    <div class="grid grid-3 package-grid">
      <?php
      include __DIR__ . '/../components/package_card.php';
      foreach ($popularPackages as $p) {
        echo renderPackageCard($p);
      }
      ?>
    </div>
    
    <!-- View All Button -->
    <div class="section-footer scroll-animate">
      <a href="index.php?page=packages" class="btn btn-primary btn-lg">
        <span>View All Packages</span>
        <i class="fas fa-arrow-right"></i>
      </a>
    </div>
  </div>
</section>

<!-- Top Destinations -->
<section class="section destinations-section">
  <div class="container">
    <div class="section-header scroll-animate">
      <span class="section-subtitle">Dream Locations</span>
      <h2 class="section-title">Top Destinations</h2>
      <p class="section-description">
        Explore our handpicked selection of the world's most breathtaking destinations.
      </p>
    </div>
    
    <div class="grid grid-3 destinations-grid">
      <?php foreach ($destinations as $index => $d): ?>
        <div class="destination-card scroll-animate" style="animation-delay: <?= $index * 0.1 ?>s">
          <div class="destination-image">
            <img src="<?= e($d['image_url']) ?>" alt="<?= e($d['name']) ?>" class="destination-img">
            <div class="destination-overlay">
              <button class="destination-wishlist">
                <i class="far fa-heart"></i>
              </button>
              <div class="destination-badge">Most Popular</div>
            </div>
          </div>
          
          <div class="destination-content">
            <div class="destination-header">
              <h3 class="destination-title"><?= e($d['name']) ?></h3>
              <div class="destination-rating">
                <i class="fas fa-star"></i>
                <span>4.8</span>
              </div>
            </div>
            
            <p class="destination-description"><?= e($d['description']) ?></p>
            
            <div class="destination-footer">
              <div class="destination-price">
                <span class="price-label">Starting from</span>
                <span class="price-amount">$<?= e($d['price_from']) ?></span>
                <span class="price-period">/person</span>
              </div>
              
              <a href="index.php?page=packages&destination=<?= urlencode(strtolower(str_replace(' ', '-', $d['name']))) ?>" 
                 class="btn btn-outline btn-sm">
                <i class="fas fa-eye"></i>
                <span>Explore</span>
              </a>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Testimonials Carousel -->
<section class="section testimonials-section">
  <div class="container">
    <div class="section-header scroll-animate">
      <span class="section-subtitle">Client Stories</span>
      <h2 class="section-title">Traveler Testimonials</h2>
      <p class="section-description">
        Hear from our satisfied travelers about their extraordinary experiences.
      </p>
    </div>
    
    <div class="carousel testimonials-carousel scroll-animate">
      <div class="carousel-track">
        <!-- Testimonial 1 -->
        <div class="carousel-item testimonial-card">
          <div class="testimonial-content">
            <div class="testimonial-rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p class="testimonial-text">
              "The luxury safari experience in Tanzania was beyond incredible. Every detail was perfectly arranged, from the private lodges to the expert guides. This was truly the trip of a lifetime!"
            </p>
          </div>
          <div class="testimonial-author">
            <img src="<?= APP_URL ?>/public/images/testimonials/user1.jpg" alt="Sarah Johnson" class="author-avatar">
            <div class="author-info">
              <h4>Sarah Johnson</h4>
              <span class="author-role">Marketing Executive</span>
            </div>
          </div>
        </div>
        
        <!-- Testimonial 2 -->
        <div class="carousel-item testimonial-card">
          <div class="testimonial-content">
            <div class="testimonial-rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="testimonial-text">
              "Our European luxury tour was seamless from start to finish. The private yacht cruise in the Greek Islands was a highlight we'll never forget. Exceptional service throughout!"
            </p>
          </div>
          <div class="testimonial-author">
            <img src="<?= APP_URL ?>/public/images/testimonials/user2.jpg" alt="Michael Chen" class="author-avatar">
            <div class="author-info">
              <h4>Michael Chen</h4>
              <span class="author-role">Tech Entrepreneur</span>
            </div>
          </div>
        </div>
        
        <!-- Testimonial 3 -->
        <div class="carousel-item testimonial-card">
          <div class="testimonial-content">
            <div class="testimonial-rating">
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
              <i class="fas fa-star"></i>
            </div>
            <p class="testimonial-text">
              "The Maldives overwater villa experience was pure magic. Our travel concierge handled everything perfectly. We're already planning our next trip with Travelers of Destination!"
            </p>
          </div>
          <div class="testimonial-author">
            <img src="<?= APP_URL ?>/public/images/testimonials/user3.jpg" alt="Emily Rodriguez" class="author-avatar">
            <div class="author-info">
              <h4>Emily Rodriguez</h4>
              <span class="author-role">Doctor</span>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Carousel Navigation -->
      <div class="carousel-nav">
        <button class="carousel-prev">
          <i class="fas fa-chevron-left"></i>
        </button>
        <div class="carousel-dots">
          <button class="carousel-dot active"></button>
          <button class="carousel-dot"></button>
          <button class="carousel-dot"></button>
        </div>
        <button class="carousel-next">
          <i class="fas fa-chevron-right"></i>
        </button>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="section cta-section">
  <div class="container">
    <div class="cta-content scroll-animate">
      <div class="cta-text">
        <h2 class="cta-title">Ready for Your<br>Next Adventure?</h2>
        <p class="cta-description">
          Let our travel experts craft your perfect journey. Contact us today for a personalized consultation.
        </p>
      </div>
      
      <div class="cta-buttons">
        <a href="index.php?page=contact" class="btn btn-primary btn-lg">
          <i class="fas fa-calendar-check"></i>
          <span>Schedule Consultation</span>
        </a>
        <a href="tel:+15551234567" class="btn btn-secondary btn-lg">
          <i class="fas fa-phone-alt"></i>
          <span>Call Now</span>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- JavaScript for Home Page Features -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  // Animated counter for hero stats
  const statNumbers = document.querySelectorAll('.stat-number');
  
  statNumbers.forEach(stat => {
    const target = parseInt(stat.getAttribute('data-count'));
    const suffix = stat.textContent.includes('%') ? '%' : '';
    let current = 0;
    const increment = target / 100;
    const timer = setInterval(() => {
      current += increment;
      if (current >= target) {
        current = target;
        clearInterval(timer);
      }
      stat.textContent = Math.floor(current) + suffix;
    }, 20);
  });
  
  // Package filtering
  const filterButtons = document.querySelectorAll('.filter-btn');
  const packageCards = document.querySelectorAll('.package-card');
  
  filterButtons.forEach(button => {
    button.addEventListener('click', () => {
      // Update active button
      filterButtons.forEach(btn => btn.classList.remove('active'));
      button.classList.add('active');
      
      // Filter packages
      const category = button.dataset.category;
      packageCards.forEach(card => {
        if (category === 'all' || card.dataset.category === category) {
          card.style.display = 'block';
          setTimeout(() => {
            card.style.opacity = '1';
            card.style.transform = 'translateY(0)';
          }, 100);
        } else {
          card.style.opacity = '0';
          card.style.transform = 'translateY(20px)';
          setTimeout(() => {
            card.style.display = 'none';
          }, 300);
        }
      });
    });
  });
  
  // Wishlist toggle for destinations
  const wishlistButtons = document.querySelectorAll('.destination-wishlist');
  wishlistButtons.forEach(button => {
    button.addEventListener('click', function() {
      const icon = this.querySelector('i');
      if (icon.classList.contains('far')) {
        icon.classList.remove('far');
        icon.classList.add('fas');
        icon.style.color = '#e74c3c';
        AlertManager.show('Added to wishlist!', 'success');
      } else {
        icon.classList.remove('fas');
        icon.classList.add('far');
        icon.style.color = '';
        AlertManager.show('Removed from wishlist', 'info');
      }
    });
  });
});
</script>

<!-- Additional CSS for Home Page -->
<style>
/* Hero Section Enhancements */
.hero-badge {
  margin-bottom: 30px;
}

.badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 10px 20px;
  background: rgba(240, 165, 0, 0.1);
  border: 1px solid var(--sunset-gold);
  border-radius: 50px;
  color: var(--sunset-gold);
  font-weight: 600;
  font-size: 0.9rem;
}

.text-gradient {
  background: linear-gradient(135deg, var(--sunset-gold), var(--horizon-cyan));
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
}

.hero-stats {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 30px;
  margin-top: 60px;
  padding-top: 40px;
  border-top: 1px solid rgba(255, 255, 255, 0.1);
}

.stat-item {
  text-align: center;
}

.stat-number {
  font-size: 2.5rem;
  font-weight: 700;
  color: var(--sunset-gold);
  margin-bottom: 5px;
}

.stat-label {
  font-size: 0.9rem;
  opacity: 0.8;
  text-transform: uppercase;
  letter-spacing: 1px;
}

.scroll-indicator {
  position: absolute;
  bottom: 40px;
  left: 50%;
  transform: translateX(-50%);
  text-align: center;
}

.mouse {
  width: 30px;
  height: 50px;
  border: 2px solid white;
  border-radius: 15px;
  margin: 0 auto 10px;
  position: relative;
}

.wheel {
  width: 4px;
  height: 10px;
  background: white;
  border-radius: 2px;
  position: absolute;
  top: 10px;
  left: 50%;
  transform: translateX(-50%);
  animation: scroll 2s infinite;
}

.arrow span {
  display: block;
  width: 10px;
  height: 10px;
  border-bottom: 2px solid white;
  border-right: 2px solid white;
  transform: rotate(45deg);
  margin: -5px auto;
  animation: arrow 2s infinite;
}

.arrow span:nth-child(2) {
  animation-delay: 0.2s;
}

.arrow span:nth-child(3) {
  animation-delay: 0.4s;
}

@keyframes scroll {
  0% { transform: translateX(-50%) translateY(0); opacity: 1; }
  100% { transform: translateX(-50%) translateY(20px); opacity: 0; }
}

@keyframes arrow {
  0% { opacity: 0; transform: rotate(45deg) translateY(-20px); }
  50% { opacity: 1; }
  100% { opacity: 0; transform: rotate(45deg) translateY(20px); }
}

/* Why Choose Us */
.why-us-section {
  background: linear-gradient(135deg, var(--pearl-white) 0%, #f5f9ff 100%);
}

.section-header {
  text-align: center;
  max-width: 800px;
  margin: 0 auto 60px;
}

.section-subtitle {
  display: inline-block;
  padding: 8px 20px;
  background: rgba(34, 166, 179, 0.1);
  color: var(--horizon-cyan);
  border-radius: 50px;
  font-weight: 600;
  font-size: 0.9rem;
  margin-bottom: 20px;
  letter-spacing: 1px;
}

.section-description {
  font-size: 1.1rem;
  color: rgba(var(--midnight-navy), 0.7);
  line-height: 1.6;
}

.feature-card {
  text-align: center;
  padding: 40px 30px;
  background: white;
  border-radius: 20px;
  box-shadow: var(--shadow-md);
  transition: all var(--transition-normal);
}

.feature-card:hover {
  transform: translateY(-10px);
  box-shadow: var(--shadow-lg);
}

.feature-icon {
  width: 80px;
  height: 80px;
  background: linear-gradient(135deg, var(--sunset-gold), var(--horizon-cyan));
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 30px;
  font-size: 2rem;
  color: white;
}

.feature-card h3 {
  margin-bottom: 15px;
  color: var(--deep-ocean-blue);
}

.feature-card p {
  color: rgba(var(--midnight-navy), 0.7);
  font-size: 0.95rem;
  line-height: 1.5;
}

/* Packages Section */
.package-filter {
  display: flex;
  justify-content: center;
  margin-bottom: 40px;
}

.filter-buttons {
  display: flex;
  gap: 10px;
  flex-wrap: wrap;
  justify-content: center;
}

.filter-btn {
  padding: 12px 24px;
  background: var(--glass-bg);
  border: 1px solid var(--glass-border);
  color: var(--midnight-navy);
  border-radius: 50px;
  font-weight: 600;
  cursor: pointer;
  transition: all var(--transition-normal);
}

.filter-btn:hover {
  background: var(--horizon-cyan);
  color: white;
  transform: translateY(-2px);
}

.filter-btn.active {
  background: linear-gradient(135deg, var(--sunset-gold), var(--horizon-cyan));
  color: white;
  border-color: transparent;
}

.section-footer {
  text-align: center;
  margin-top: 60px;
}

.btn-lg {
  padding: 20px 40px;
  font-size: 1.2rem;
  border-radius: 15px;
}

/* Destinations Section */
.destination-card {
  background: white;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: var(--shadow-md);
  transition: all var(--transition-normal);
}

.destination-card:hover {
  transform: translateY(-10px);
  box-shadow: var(--shadow-lg);
}

.destination-image {
  position: relative;
  height: 250px;
  overflow: hidden;
}

.destination-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform var(--transition-normal);
}

.destination-card:hover .destination-img {
  transform: scale(1.1);
}

.destination-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(to bottom, transparent 50%, rgba(0,0,0,0.7) 100%);
  padding: 20px;
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
}

.destination-wishlist {
  width: 40px;
  height: 40px;
  background: white;
  border: none;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: all var(--transition-fast);
}

.destination-wishlist:hover {
  background: var(--sunset-gold);
  color: white;
}

.destination-badge {
  background: var(--sunset-gold);
  color: white;
  padding: 6px 12px;
  border-radius: 4px;
  font-size: 0.8rem;
  font-weight: 600;
}

.destination-content {
  padding: 30px;
}

.destination-header {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  margin-bottom: 15px;
}

.destination-title {
  margin: 0;
  font-size: 1.5rem;
}

.destination-rating {
  display: flex;
  align-items: center;
  gap: 5px;
  color: var(--sunset-gold);
  font-weight: 600;
}

.destination-description {
  color: rgba(var(--midnight-navy), 0.7);
  font-size: 0.95rem;
  line-height: 1.5;
  margin-bottom: 20px;
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

.destination-footer {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.destination-price {
  display: flex;
  flex-direction: column;
}

.price-label {
  font-size: 0.8rem;
  color: rgba(var(--midnight-navy), 0.6);
  margin-bottom: 2px;
}

.price-amount {
  font-size: 1.8rem;
  font-weight: 700;
  color: var(--sunset-gold);
}

.price-period {
  font-size: 0.9rem;
  color: rgba(var(--midnight-navy), 0.6);
}

/* Testimonials Section */
.testimonials-section {
  background: linear-gradient(135deg, #f8f9ff 0%, #eef2ff 100%);
}

.testimonials-carousel {
  max-width: 900px;
  margin: 0 auto;
}

.testimonial-card {
  background: white;
  border-radius: 20px;
  padding: 40px;
  box-shadow: var(--shadow-md);
}

.testimonial-rating {
  color: var(--sunset-gold);
  font-size: 1.2rem;
  margin-bottom: 20px;
}

.testimonial-text {
  font-size: 1.1rem;
  line-height: 1.6;
  color: rgba(var(--midnight-navy), 0.8);
  font-style: italic;
  margin-bottom: 30px;
}

.testimonial-author {
  display: flex;
  align-items: center;
  gap: 15px;
}

.author-avatar {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  object-fit: cover;
  border: 3px solid var(--horizon-cyan);
}

.author-info h4 {
  margin: 0 0 5px 0;
  font-size: 1.1rem;
}

.author-role {
  color: rgba(var(--midnight-navy), 0.6);
  font-size: 0.9rem;
}

.carousel-nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: 40px;
}

.carousel-prev,
.carousel-next {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  background: white;
  border: 2px solid var(--glass-border);
  color: var(--midnight-navy);
  cursor: pointer;
  transition: all var(--transition-normal);
}

.carousel-prev:hover,
.carousel-next:hover {
  background: var(--horizon-cyan);
  color: white;
  border-color: var(--horizon-cyan);
}

.carousel-dots {
  display: flex;
  gap: 10px;
}

/* CTA Section */
.cta-section {
  background: linear-gradient(135deg, var(--deep-ocean-blue), var(--midnight-navy));
  color: white;
  text-align: center;
}

.cta-content {
  max-width: 800px;
  margin: 0 auto;
  padding: 80px 40px;
  border-radius: 30px;
  background: rgba(255, 255, 255, 0.05);
  backdrop-filter: blur(10px);
}

.cta-title {
  font-size: 3rem;
  margin-bottom: 20px;
  background: linear-gradient(135deg, var(--sunset-gold), white);
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
}

.cta-description {
  font-size: 1.2rem;
  opacity: 0.9;
  margin-bottom: 40px;
  max-width: 600px;
  margin-left: auto;
  margin-right: auto;
}

.cta-buttons {
  display: flex;
  gap: 20px;
  justify-content: center;
  flex-wrap: wrap;
}

/* Responsive */
@media (max-width: 1024px) {
  .hero-stats {
    grid-template-columns: repeat(2, 1fr);
    gap: 40px;
  }
  
  .grid-4 {
    grid-template-columns: repeat(2, 1fr);
  }
  
  .cta-title {
    font-size: 2.5rem;
  }
}

@media (max-width: 768px) {
  .grid-3 {
    grid-template-columns: repeat(2, 1fr);
  }
  
  .hero-stats {
    grid-template-columns: 1fr;
    gap: 30px;
  }
  
  .filter-buttons {
    overflow-x: auto;
    padding-bottom: 10px;
    justify-content: flex-start;
  }
  
  .cta-content {
    padding: 60px 20px;
  }
  
  .cta-title {
    font-size: 2rem;
  }
  
  .cta-buttons {
    flex-direction: column;
    align-items: center;
  }
  
  .btn-lg {
    width: 100%;
    max-width: 300px;
    justify-content: center;
  }
}

@media (max-width: 480px) {
  .grid-3,
  .grid-4 {
    grid-template-columns: 1fr;
  }
  
  .hero-buttons {
    flex-direction: column;
    align-items: center;
  }
  
  .destination-footer {
    flex-direction: column;
    gap: 15px;
    align-items: stretch;
  }
  
  .btn-sm {
    width: 100%;
    justify-content: center;
  }
}
</style>