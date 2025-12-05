<!-- Package Detail Hero -->
<section class="package-detail-hero">
  <div class="hero-background">
    <img src="<?= e($package['hero_image_url']) ?>" alt="<?= e($package['title']) ?>" class="hero-image">
    <div class="hero-overlay"></div>
  </div>
  
  <div class="container">
    <div class="hero-content scroll-animate">
      <!-- Breadcrumb -->
      <nav class="breadcrumb">
        <a href="index.php?page=home">Home</a>
        <i class="fas fa-chevron-right"></i>
        <a href="index.php?page=packages">Packages</a>
        <i class="fas fa-chevron-right"></i>
        <span class="current"><?= e($package['title']) ?></span>
      </nav>
      
      <!-- Package Title & Meta -->
      <div class="package-header">
        <div class="package-badges">
          <?php if ($package['is_best_seller'] ?? false): ?>
            <span class="badge badge-best-seller">
              <i class="fas fa-crown"></i>
              Best Seller
            </span>
          <?php endif; ?>
          <?php if ($package['is_featured'] ?? false): ?>
            <span class="badge badge-featured">
              <i class="fas fa-star"></i>
              Featured
            </span>
          <?php endif; ?>
          <?php if ($package['discount'] ?? 0 > 0): ?>
            <span class="badge badge-discount">
              -<?= e($package['discount']) ?>% OFF
            </span>
          <?php endif; ?>
          <span class="badge badge-category">
            <i class="fas fa-tag"></i>
            <?= e($package['category'] ?? 'Luxury') ?>
          </span>
        </div>
        
        <h1 class="package-title"><?= e($package['title']) ?></h1>
        
        <div class="package-meta">
          <div class="meta-item">
            <i class="fas fa-map-marker-alt"></i>
            <span><?= e($package['destination'] ?? 'Multiple Destinations') ?></span>
          </div>
          <div class="meta-item">
            <i class="fas fa-clock"></i>
            <span><?= e($package['duration_days']) ?> Days / <?= e($package['duration_nights']) ?> Nights</span>
          </div>
          <div class="meta-item">
            <i class="fas fa-calendar-alt"></i>
            <span>Available Year-Round</span>
          </div>
        </div>
        
        <!-- Rating -->
        <div class="package-rating">
          <div class="stars">
            <?php
            $rating = floatval($package['rating'] ?? 4.8);
            $fullStars = floor($rating);
            $halfStar = ($rating - $fullStars) >= 0.5;
            for ($i = 0; $i < 5; $i++): ?>
              <?php if ($i < $fullStars): ?>
                <i class="fas fa-star"></i>
              <?php elseif ($halfStar && $i == $fullStars): ?>
                <i class="fas fa-star-half-alt"></i>
              <?php else: ?>
                <i class="far fa-star"></i>
              <?php endif; ?>
            <?php endfor; ?>
          </div>
          <span class="rating-number"><?= number_format($rating, 1) ?></span>
          <span class="rating-count">(<?= e($package['reviews_count'] ?? 42) ?> reviews)</span>
          <span class="rating-verified">
            <i class="fas fa-check-circle"></i>
            Verified Reviews
          </span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Package Detail Content -->
<section class="section package-detail-section">
  <div class="container">
    <div class="package-detail-layout">
      <!-- Main Content -->
      <main class="package-main-content">
        <!-- Overview -->
        <section class="content-section scroll-animate">
          <h2 class="section-title">
            <i class="fas fa-info-circle"></i>
            Overview
          </h2>
          <div class="section-content">
            <p class="package-description"><?= e($package['short_description']) ?></p>
            
            <?php if (!empty($package['full_description'])): ?>
              <div class="full-description">
                <?= nl2br(e($package['full_description'])) ?>
              </div>
            <?php endif; ?>
          </div>
        </section>

        <!-- Highlights -->
        <section class="content-section scroll-animate" style="animation-delay: 0.1s">
          <h2 class="section-title">
            <i class="fas fa-bolt"></i>
            Package Highlights
          </h2>
          <div class="highlights-grid">
            <div class="highlight-item">
              <div class="highlight-icon">
                <i class="fas fa-hotel"></i>
              </div>
              <div class="highlight-content">
                <h4>Luxury Accommodation</h4>
                <p>5-star hotels & resorts with premium amenities</p>
              </div>
            </div>
            <div class="highlight-item">
              <div class="highlight-icon">
                <i class="fas fa-utensils"></i>
              </div>
              <div class="highlight-content">
                <h4>Fine Dining</h4>
                <p>Breakfast included + selected gourmet meals</p>
              </div>
            </div>
            <div class="highlight-item">
              <div class="highlight-icon">
                <i class="fas fa-car"></i>
              </div>
              <div class="highlight-content">
                <h4>Private Transfers</h4>
                <p>Airport transfers & comfortable ground transportation</p>
              </div>
            </div>
            <div class="highlight-item">
              <div class="highlight-icon">
                <i class="fas fa-user-tie"></i>
              </div>
              <div class="highlight-content">
                <h4>Expert Guides</h4>
                <p>Professional multilingual tour guides</p>
              </div>
            </div>
          </div>
        </section>

        <!-- Itinerary -->
        <section class="content-section scroll-animate" style="animation-delay: 0.2s">
          <h2 class="section-title">
            <i class="fas fa-calendar-check"></i>
            Detailed Itinerary
          </h2>
          <div class="itinerary-timeline">
            <?php for ($day = 1; $day <= min(5, intval($package['duration_days'])); $day++): ?>
              <div class="timeline-item">
                <div class="timeline-day">
                  <span class="day-number">Day <?= $day ?></span>
                </div>
                <div class="timeline-content">
                  <h4>Arrival & Welcome</h4>
                  <p>Arrive at your destination, transfer to luxury hotel, welcome dinner at a premium restaurant.</p>
                  <div class="timeline-details">
                    <span class="detail-item">
                      <i class="fas fa-hotel"></i>
                      Luxury Hotel
                    </span>
                    <span class="detail-item">
                      <i class="fas fa-utensils"></i>
                      Dinner Included
                    </span>
                    <span class="detail-item">
                      <i class="fas fa-car"></i>
                      Private Transfer
                    </span>
                  </div>
                </div>
              </div>
            <?php endfor; ?>
            
            <?php if (intval($package['duration_days']) > 5): ?>
              <div class="timeline-more">
                <button class="btn btn-outline" id="viewFullItinerary">
                  <i class="fas fa-calendar-alt"></i>
                  View Full <?= e($package['duration_days']) ?>-Day Itinerary
                </button>
              </div>
            <?php endif; ?>
          </div>
        </section>

        <!-- Gallery -->
        <section class="content-section scroll-animate" style="animation-delay: 0.3s">
          <h2 class="section-title">
            <i class="fas fa-images"></i>
            Photo Gallery
          </h2>
          <div class="gallery-grid">
            <?php
            $galleryImages = [
              'gallery1.jpg',
              'gallery2.jpg',
              'gallery3.jpg',
              'gallery4.jpg',
              'gallery5.jpg',
              'gallery6.jpg'
            ];
            
            foreach ($galleryImages as $image): ?>
              <div class="gallery-item">
                <img src="<?= APP_URL ?>/public/images/packages/<?= e($package['slug']) ?>/<?= $image ?>" 
                     alt="<?= e($package['title']) ?> - Image <?= $image ?>"
                     class="gallery-image"
                     data-gallery="<?= e($package['slug']) ?>">
                <div class="gallery-overlay">
                  <i class="fas fa-search-plus"></i>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </section>

        <!-- Reviews -->
        <section class="content-section scroll-animate" style="animation-delay: 0.4s">
          <h2 class="section-title">
            <i class="fas fa-comment-alt"></i>
            Traveler Reviews
          </h2>
          <div class="reviews-summary">
            <div class="summary-rating">
              <div class="rating-score"><?= number_format($rating, 1) ?></div>
              <div class="rating-stars">
                <?php for ($i = 0; $i < 5; $i++): ?>
                  <i class="fas fa-star"></i>
                <?php endfor; ?>
              </div>
              <div class="rating-count">Based on <?= e($package['reviews_count'] ?? 42) ?> reviews</div>
            </div>
            <div class="summary-stats">
              <div class="stat-item">
                <span class="stat-label">Excellent</span>
                <div class="stat-bar">
                  <div class="stat-fill" style="width: 85%"></div>
                </div>
                <span class="stat-percent">85%</span>
              </div>
              <div class="stat-item">
                <span class="stat-label">Very Good</span>
                <div class="stat-bar">
                  <div class="stat-fill" style="width: 12%"></div>
                </div>
                <span class="stat-percent">12%</span>
              </div>
              <div class="stat-item">
                <span class="stat-label">Average</span>
                <div class="stat-bar">
                  <div class="stat-fill" style="width: 2%"></div>
                </div>
                <span class="stat-percent">2%</span>
              </div>
              <div class="stat-item">
                <span class="stat-label">Poor</span>
                <div class="stat-bar">
                  <div class="stat-fill" style="width: 1%"></div>
                </div>
                <span class="stat-percent">1%</span>
              </div>
            </div>
          </div>
          
          <!-- Sample Reviews -->
          <div class="reviews-list">
            <div class="review-card">
              <div class="review-header">
                <img src="<?= APP_URL ?>/public/images/testimonials/user1.jpg" alt="Sarah Johnson" class="review-avatar">
                <div class="review-author">
                  <h4>Sarah Johnson</h4>
                  <div class="review-meta">
                    <span class="review-date">March 15, 2024</span>
                    <span class="review-rating">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </span>
                  </div>
                </div>
              </div>
              <div class="review-content">
                <h4>"Absolutely Incredible Experience!"</h4>
                <p>Every detail was perfectly arranged. The luxury accommodations exceeded our expectations, and the private guides were incredibly knowledgeable. This was truly the trip of a lifetime!</p>
              </div>
            </div>
          </div>
          
          <div class="reviews-actions">
            <button class="btn btn-primary" id="writeReview">
              <i class="fas fa-pen"></i>
              Write a Review
            </button>
            <a href="#reviews" class="btn btn-outline">
              <i class="fas fa-comments"></i>
              View All Reviews
            </a>
          </div>
        </section>
      </main>

      <!-- Booking Sidebar -->
      <aside class="package-booking-sidebar">
        <div class="booking-card sticky-sidebar">
          <!-- Price Box -->
          <div class="price-box scroll-animate">
            <div class="price-header">
              <h3>Package Price</h3>
              <?php if ($package['discount'] ?? 0 > 0): ?>
                <span class="discount-badge">Save <?= e($package['discount']) ?>%</span>
              <?php endif; ?>
            </div>
            
            <div class="price-details">
              <?php if ($package['discount'] ?? 0 > 0): ?>
                <div class="price-original">
                  <span class="original-label">Original Price</span>
                  <span class="original-amount">
                    <?= e($package['currency']) === 'USD' ? '$' : e($package['currency']) ?>
                    <?= number_format(floatval($package['price']), 2) ?>
                  </span>
                </div>
              <?php endif; ?>
              
              <div class="price-current">
                <span class="current-label">Current Price</span>
                <span class="current-amount">
                  <?php
                  $finalPrice = $package['discount'] > 0 
                    ? floatval($package['price']) * (1 - (floatval($package['discount']) / 100))
                    : floatval($package['price']);
                  ?>
                  <?= e($package['currency']) === 'USD' ? '$' : e($package['currency']) ?>
                  <?= number_format($finalPrice, 2) ?>
                </span>
                <span class="price-note">per person</span>
              </div>
              
              <div class="price-inclusions">
                <h4>What's Included:</h4>
                <ul class="inclusions-list">
                  <li><i class="fas fa-check"></i> Luxury Accommodation</li>
                  <li><i class="fas fa-check"></i> Daily Breakfast</li>
                  <li><i class="fas fa-check"></i> Airport Transfers</li>
                  <li><i class="fas fa-check"></i> Guided Tours</li>
                  <li><i class="fas fa-check"></i> Travel Insurance</li>
                </ul>
              </div>
            </div>
          </div>

          <!-- Inquiry Form -->
          <div class="inquiry-form scroll-animate" style="animation-delay: 0.1s">
            <h3 class="form-title">
              <i class="fas fa-envelope"></i>
              Get a Custom Quote
            </h3>
            <p class="form-subtitle">Fill in your details for a personalized quote</p>
            
            <form method="post" class="premium-form" id="packageInquiryForm">
              <?= csrf_field() ?>
              <input type="hidden" name="inquiry_type" value="package">
              <input type="hidden" name="package_slug" value="<?= e($package['slug']) ?>">
              
              <div class="form-group">
                <label class="form-label">
                  <i class="fas fa-user"></i>
                  Full Name *
                </label>
                <input type="text" 
                       name="name" 
                       class="form-control" 
                       placeholder="Enter your full name"
                       required
                       data-validation="name">
                <div class="form-error" data-error="name"></div>
              </div>
              
              <div class="form-group">
                <label class="form-label">
                  <i class="fas fa-phone"></i>
                  Phone Number *
                </label>
                <input type="tel" 
                       name="phone" 
                       class="form-control" 
                       placeholder="Enter your phone number"
                       required
                       data-validation="phone">
                <div class="form-error" data-error="phone"></div>
              </div>
              
              <div class="form-group">
                <label class="form-label">
                  <i class="fas fa-envelope"></i>
                  Email Address *
                </label>
                <input type="email" 
                       name="email" 
                       class="form-control" 
                       placeholder="Enter your email address"
                       required
                       data-validation="email">
                <div class="form-error" data-error="email"></div>
              </div>
              
              <div class="form-group">
                <label class="form-label">
                  <i class="fas fa-calendar-alt"></i>
                  Preferred Travel Dates
                </label>
                <div class="date-range">
                  <input type="date" 
                         name="start_date" 
                         class="form-control date-start"
                         placeholder="Start Date">
                  <span class="date-separator">to</span>
                  <input type="date" 
                         name="end_date" 
                         class="form-control date-end"
                         placeholder="End Date">
                </div>
              </div>
              
              <div class="form-group">
                <label class="form-label">
                  <i class="fas fa-users"></i>
                  Number of Travelers
                </label>
                <div class="travelers-select">
                  <button type="button" class="traveler-btn minus" data-target="adults">-</button>
                  <input type="number" 
                         name="travelers" 
                         class="form-control traveler-input"
                         value="2"
                         min="1"
                         max="10"
                         readonly>
                  <button type="button" class="traveler-btn plus" data-target="adults">+</button>
                  <span class="traveler-label">Adults</span>
                </div>
              </div>
              
              <div class="form-group">
                <label class="form-label">
                  <i class="fas fa-comment"></i>
                  Special Requirements
                </label>
                <textarea name="message" 
                          class="form-control" 
                          rows="3"
                          placeholder="Any special requests or requirements..."></textarea>
              </div>
              
              <div class="form-actions">
                <button type="submit" class="btn btn-primary btn-block">
                  <i class="fas fa-paper-plane"></i>
                  Get Your Custom Quote
                </button>
                <button type="button" class="btn btn-outline btn-block" id="whatsappInquiry">
                  <i class="fab fa-whatsapp"></i>
                  WhatsApp Inquiry
                </button>
              </div>
              
              <div class="form-footer">
                <p class="form-note">
                  <i class="fas fa-shield-alt"></i>
                  Your information is secure and will not be shared
                </p>
              </div>
            </form>
          </div>

          <!-- Quick Contact -->
          <div class="quick-contact scroll-animate" style="animation-delay: 0.2s">
            <h4>
              <i class="fas fa-headset"></i>
              Need Immediate Assistance?
            </h4>
            <div class="contact-methods">
              <a href="tel:+15551234567" class="contact-method">
                <i class="fas fa-phone-alt"></i>
                <div>
                  <span>Call Now</span>
                  <strong>+1 (555) 123-4567</strong>
                </div>
              </a>
              <a href="mailto:info@travelersofdestination.com" class="contact-method">
                <i class="fas fa-envelope"></i>
                <div>
                  <span>Email Us</span>
                  <strong>info@travelersofdestination.com</strong>
                </div>
              </a>
              <button class="contact-method" id="liveChat">
                <i class="fas fa-comment-dots"></i>
                <div>
                  <span>Live Chat</span>
                  <strong>Available 24/7</strong>
                </div>
              </button>
            </div>
          </div>
        </div>
      </aside>
    </div>
  </div>
</section>

<!-- Similar Packages -->
<section class="section similar-packages-section">
  <div class="container">
    <div class="section-header scroll-animate">
      <h2 class="section-title">You Might Also Like</h2>
      <p class="section-description">Explore similar premium travel experiences</p>
    </div>
    
    <div class="packages-carousel">
      <div class="carousel-track" id="similarPackagesCarousel">
        <!-- Similar packages will be loaded here via JavaScript -->
      </div>
      
      <div class="carousel-nav">
        <button class="carousel-prev">
          <i class="fas fa-chevron-left"></i>
        </button>
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
        <h2 class="cta-title">Ready to Book This Experience?</h2>
        <p class="cta-description">
          Contact our travel experts today for personalized service and exclusive offers.
        </p>
      </div>
      
      <div class="cta-buttons">
        <a href="index.php?page=contact" class="btn btn-primary btn-lg">
          <i class="fas fa-calendar-check"></i>
          <span>Book Now</span>
        </a>
        <a href="tel:+15551234567" class="btn btn-secondary btn-lg">
          <i class="fas fa-phone-alt"></i>
          <span>Call to Book</span>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- CSS for Package Show Page -->
<style>
/* Package Detail Hero */
.package-detail-hero {
  position: relative;
  min-height: 80vh;
  display: flex;
  align-items: center;
  color: white;
  overflow: hidden;
}

.hero-background {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 1;
}

.hero-image {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.hero-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(to bottom, rgba(0,0,0,0.3) 0%, rgba(0,0,0,0.8) 100%);
}

.hero-content {
  position: relative;
  z-index: 2;
  padding: 120px 0 60px;
}

.breadcrumb {
  display: flex;
  align-items: center;
  gap: 10px;
  margin-bottom: 30px;
  font-size: 0.9rem;
}

.breadcrumb a {
  color: rgba(255, 255, 255, 0.8);
  text-decoration: none;
  transition: color var(--transition-fast);
}

.breadcrumb a:hover {
  color: var(--sunset-gold);
}

.breadcrumb .current {
  color: var(--sunset-gold);
  font-weight: 600;
}

.breadcrumb i {
  font-size: 0.8rem;
  opacity: 0.5;
}

.package-header {
  max-width: 800px;
}

.package-badges {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
  margin-bottom: 20px;
}

.package-title {
  font-size: 3.5rem;
  margin-bottom: 20px;
  line-height: 1.2;
}

.package-meta {
  display: flex;
  flex-wrap: wrap;
  gap: 30px;
  margin-bottom: 25px;
}

.meta-item {
  display: flex;
  align-items: center;
  gap: 10px;
  font-size: 1.1rem;
  color: rgba(255, 255, 255, 0.9);
}

.meta-item i {
  color: var(--sunset-gold);
}

.package-rating {
  display: flex;
  align-items: center;
  gap: 15px;
  flex-wrap: wrap;
}

.package-rating .stars {
  display: flex;
  gap: 5px;
}

.package-rating .stars i {
  color: var(--sunset-gold);
  font-size: 1.2rem;
}

.rating-number {
  font-size: 1.5rem;
  font-weight: 700;
}

.rating-count {
  color: rgba(255, 255, 255, 0.7);
}

.rating-verified {
  display: flex;
  align-items: center;
  gap: 5px;
  background: rgba(46, 204, 113, 0.2);
  color: #27ae60;
  padding: 5px 12px;
  border-radius: 20px;
  font-size: 0.9rem;
  font-weight: 600;
}

/* Package Detail Layout */
.package-detail-layout {
  display: grid;
  grid-template-columns: 1fr 400px;
  gap: 60px;
}

/* Content Sections */
.content-section {
  margin-bottom: 60px;
}

.section-title {
  display: flex;
  align-items: center;
  gap: 10px;
  color: var(--deep-ocean-blue);
  margin-bottom: 25px;
  font-size: 1.8rem;
}

.section-title i {
  color: var(--horizon-cyan);
}

.package-description {
  font-size: 1.1rem;
  line-height: 1.7;
  color: rgba(var(--midnight-navy), 0.8);
  margin-bottom: 20px;
}

.full-description {
  font-size: 1rem;
  line-height: 1.6;
  color: rgba(var(--midnight-navy), 0.7);
}

/* Highlights */
.highlights-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 25px;
}

.highlight-item {
  display: flex;
  gap: 20px;
  padding: 25px;
  background: var(--glass-bg);
  border: 1px solid var(--glass-border);
  border-radius: 15px;
  transition: all var(--transition-normal);
}

.highlight-item:hover {
  transform: translateY(-5px);
  box-shadow: var(--shadow-md);
}

.highlight-icon {
  width: 60px;
  height: 60px;
  background: linear-gradient(135deg, var(--sunset-gold), var(--horizon-cyan));
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.5rem;
  color: white;
  flex-shrink: 0;
}

.highlight-content h4 {
  margin: 0 0 8px 0;
  color: var(--deep-ocean-blue);
}

.highlight-content p {
  margin: 0;
  color: rgba(var(--midnight-navy), 0.7);
  font-size: 0.95rem;
  line-height: 1.5;
}

/* Itinerary */
.itinerary-timeline {
  position: relative;
  padding-left: 30px;
}

.itinerary-timeline::before {
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  width: 2px;
  background: var(--horizon-cyan);
}

.timeline-item {
  position: relative;
  margin-bottom: 40px;
}

.timeline-item:last-child {
  margin-bottom: 0;
}

.timeline-day {
  position: absolute;
  left: -30px;
  top: 0;
  width: 60px;
  height: 60px;
  background: white;
  border: 2px solid var(--horizon-cyan);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 2;
}

.day-number {
  font-weight: 700;
  color: var(--horizon-cyan);
  font-size: 1.2rem;
}

.timeline-content {
  margin-left: 50px;
  padding: 25px;
  background: var(--glass-bg);
  border: 1px solid var(--glass-border);
  border-radius: 15px;
}

.timeline-content h4 {
  margin: 0 0 12px 0;
  color: var(--deep-ocean-blue);
}

.timeline-content p {
  margin: 0 0 15px 0;
  color: rgba(var(--midnight-navy), 0.7);
  line-height: 1.6;
}

.timeline-details {
  display: flex;
  flex-wrap: wrap;
  gap: 15px;
}

.detail-item {
  display: flex;
  align-items: center;
  gap: 6px;
  font-size: 0.9rem;
  color: var(--horizon-cyan);
  font-weight: 500;
}

.timeline-more {
  text-align: center;
  margin-top: 40px;
}

/* Gallery */
.gallery-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
  gap: 20px;
}

.gallery-item {
  position: relative;
  border-radius: 12px;
  overflow: hidden;
  height: 200px;
  cursor: pointer;
}

.gallery-image {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform var(--transition-normal);
}

.gallery-item:hover .gallery-image {
  transform: scale(1.1);
}

.gallery-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(0, 0, 0, 0.5);
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 0;
  transition: opacity var(--transition-normal);
}

.gallery-item:hover .gallery-overlay {
  opacity: 1;
}

.gallery-overlay i {
  color: white;
  font-size: 2rem;
}

/* Reviews */
.reviews-summary {
  display: grid;
  grid-template-columns: 200px 1fr;
  gap: 40px;
  margin-bottom: 40px;
  padding: 30px;
  background: var(--glass-bg);
  border: 1px solid var(--glass-border);
  border-radius: 15px;
}

.summary-rating {
  text-align: center;
}

.rating-score {
  font-size: 3.5rem;
  font-weight: 700;
  color: var(--sunset-gold);
  line-height: 1;
  margin-bottom: 10px;
}

.rating-stars {
  display: flex;
  justify-content: center;
  gap: 5px;
  margin-bottom: 10px;
}

.rating-stars i {
  color: var(--sunset-gold);
  font-size: 1.2rem;
}

.rating-count {
  color: rgba(var(--midnight-navy), 0.6);
  font-size: 0.9rem;
}

.summary-stats {
  display: flex;
  flex-direction: column;
  gap: 15px;
}

.stat-item {
  display: flex;
  align-items: center;
  gap: 15px;
}

.stat-label {
  width: 80px;
  color: rgba(var(--midnight-navy), 0.8);
  font-size: 0.9rem;
}

.stat-bar {
  flex: 1;
  height: 8px;
  background: var(--glass-border);
  border-radius: 4px;
  overflow: hidden;
}

.stat-fill {
  height: 100%;
  background: linear-gradient(to right, var(--sunset-gold), var(--horizon-cyan));
  border-radius: 4px;
}

.stat-percent {
  width: 40px;
  text-align: right;
  font-weight: 600;
  color: var(--midnight-navy);
}

.review-card {
  padding: 30px;
  background: white;
  border-radius: 15px;
  box-shadow: var(--shadow-md);
  margin-bottom: 25px;
}

.review-header {
  display: flex;
  gap: 20px;
  margin-bottom: 20px;
}

.review-avatar {
  width: 70px;
  height: 70px;
  border-radius: 50%;
  object-fit: cover;
  border: 3px solid var(--horizon-cyan);
}

.review-author h4 {
  margin: 0 0 8px 0;
  color: var(--deep-ocean-blue);
}

.review-meta {
  display: flex;
  flex-wrap: wrap;
  gap: 15px;
  align-items: center;
}

.review-date {
  color: rgba(var(--midnight-navy), 0.6);
  font-size: 0.9rem;
}

.review-rating {
  display: flex;
  gap: 3px;
}

.review-rating i {
  color: var(--sunset-gold);
  font-size: 0.9rem;
}

.review-content h4 {
  margin: 0 0 15px 0;
  color: var(--midnight-navy);
  font-size: 1.2rem;
}

.review-content p {
  margin: 0;
  color: rgba(var(--midnight-navy), 0.7);
  line-height: 1.6;
}

.reviews-actions {
  display: flex;
  gap: 15px;
  justify-content: center;
}

/* Booking Sidebar */
.sticky-sidebar {
  position: sticky;
  top: 120px;
}

.price-box {
  background: white;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: var(--shadow-lg);
  margin-bottom: 30px;
}

.price-header {
  background: linear-gradient(135deg, var(--deep-ocean-blue), var(--midnight-navy));
  color: white;
  padding: 25px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.price-header h3 {
  margin: 0;
  font-size: 1.5rem;
}

.discount-badge {
  background: var(--sunset-gold);
  color: white;
  padding: 8px 16px;
  border-radius: 20px;
  font-weight: 700;
  font-size: 1rem;
}

.price-details {
  padding: 30px;
}

.price-original {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 20px;
  padding-bottom: 20px;
  border-bottom: 2px dashed var(--glass-border);
}

.original-label {
  color: rgba(var(--midnight-navy), 0.6);
}

.original-amount {
  font-size: 1.3rem;
  font-weight: 600;
  color: rgba(var(--midnight-navy), 0.5);
  text-decoration: line-through;
}

.price-current {
  margin-bottom: 25px;
}

.current-label {
  display: block;
  color: rgba(var(--midnight-navy), 0.6);
  margin-bottom: 5px;
  font-size: 0.95rem;
}

.current-amount {
  font-size: 2.5rem;
  font-weight: 800;
  color: var(--sunset-gold);
  display: block;
  line-height: 1;
}

.price-note {
  color: rgba(var(--midnight-navy), 0.6);
  font-size: 0.9rem;
  margin-left: 10px;
}

.price-inclusions h4 {
  color: var(--deep-ocean-blue);
  margin-bottom: 15px;
  font-size: 1.1rem;
}

.inclusions-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

.inclusions-list li {
  display: flex;
  align-items: center;
  gap: 10px;
  padding: 8px 0;
  color: rgba(var(--midnight-navy), 0.8);
}

.inclusions-list i {
  color: var(--horizon-cyan);
}

/* Inquiry Form */
.inquiry-form {
  background: white;
  border-radius: 20px;
  padding: 30px;
  box-shadow: var(--shadow-lg);
  margin-bottom: 30px;
}

.form-title {
  display: flex;
  align-items: center;
  gap: 10px;
  color: var(--deep-ocean-blue);
  margin-bottom: 10px;
  font-size: 1.5rem;
}

.form-title i {
  color: var(--sunset-gold);
}

.form-subtitle {
  color: rgba(var(--midnight-navy), 0.7);
  margin-bottom: 25px;
  font-size: 0.95rem;
}

.premium-form .form-group {
  margin-bottom: 20px;
}

.form-label {
  display: flex;
  align-items: center;
  gap: 8px;
  margin-bottom: 8px;
  font-weight: 600;
  color: var(--midnight-navy);
  font-size: 0.95rem;
}

.form-label i {
  color: var(--horizon-cyan);
  font-size: 0.9rem;
}

.date-range {
  display: flex;
  align-items: center;
  gap: 10px;
}

.date-separator {
  color: rgba(var(--midnight-navy), 0.5);
  font-weight: 600;
}

.travelers-select {
  display: flex;
  align-items: center;
  gap: 10px;
}

.traveler-btn {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  border: 2px solid var(--glass-border);
  background: white;
  color: var(--midnight-navy);
  font-size: 1.2rem;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all var(--transition-fast);
}

.traveler-btn:hover {
  border-color: var(--horizon-cyan);
  color: var(--horizon-cyan);
}

.traveler-input {
  width: 60px;
  text-align: center;
  font-weight: 700;
  font-size: 1.2rem;
}

.traveler-label {
  margin-left: 10px;
  color: rgba(var(--midnight-navy), 0.7);
  font-size: 0.9rem;
}

.form-actions {
  display: flex;
  flex-direction: column;
  gap: 15px;
  margin-top: 30px;
}

.form-footer {
  margin-top: 20px;
  text-align: center;
}

.form-note {
  font-size: 0.85rem;
  color: rgba(var(--midnight-navy), 0.6);
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
}

/* Quick Contact */
.quick-contact {
  background: linear-gradient(135deg, var(--deep-ocean-blue), var(--midnight-navy));
  border-radius: 20px;
  padding: 30px;
  color: white;
}

.quick-contact h4 {
  display: flex;
  align-items: center;
  gap: 10px;
  margin-bottom: 25px;
  font-size: 1.3rem;
}

.quick-contact h4 i {
  color: var(--sunset-gold);
}

.contact-methods {
  display: flex;
  flex-direction: column;
  gap: 15px;
}

.contact-method {
  display: flex;
  align-items: center;
  gap: 15px;
  padding: 15px;
  background: rgba(255, 255, 255, 0.1);
  border-radius: 12px;
  color: white;
  text-decoration: none;
  transition: all var(--transition-fast);
  border: none;
  cursor: pointer;
  width: 100%;
  text-align: left;
}

.contact-method:hover {
  background: rgba(255, 255, 255, 0.2);
  transform: translateX(5px);
}

.contact-method i {
  font-size: 1.5rem;
  color: var(--sunset-gold);
  width: 40px;
  text-align: center;
}

.contact-method div {
  flex: 1;
}

.contact-method span {
  display: block;
  font-size: 0.85rem;
  opacity: 0.8;
  margin-bottom: 2px;
}

.contact-method strong {
  font-size: 1rem;
}

/* Similar Packages */
.similar-packages-section {
  background: linear-gradient(135deg, #f8f9ff 0%, #eef2ff 100%);
}

.packages-carousel {
  position: relative;
  overflow: hidden;
  border-radius: 20px;
}

.carousel-track {
  display: flex;
  transition: transform var(--transition-normal);
  gap: 30px;
  padding: 20px 0;
}

.carousel-nav {
  display: flex;
  justify-content: center;
  gap: 20px;
  margin-top: 30px;
}

.carousel-nav button {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  border: 2px solid var(--glass-border);
  background: white;
  color: var(--midnight-navy);
  font-size: 1.2rem;
  cursor: pointer;
  transition: all var(--transition-normal);
}

.carousel-nav button:hover {
  background: var(--horizon-cyan);
  color: white;
  border-color: var(--horizon-cyan);
}

/* CTA Section */
.cta-section {
  background: linear-gradient(135deg, var(--deep-ocean-blue), var(--midnight-navy));
  color: white;
}

.cta-content {
  max-width: 800px;
  margin: 0 auto;
  text-align: center;
  padding: 80px 40px;
  border-radius: 30px;
  background: rgba(255, 255, 255, 0.05);
  backdrop-filter: blur(10px);
}

.cta-title {
  font-size: 2.5rem;
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
@media (max-width: 1200px) {
  .package-detail-layout {
    grid-template-columns: 1fr;
    gap: 40px;
  }
  
  .sticky-sidebar {
    position: static;
  }
}

@media (max-width: 768px) {
  .package-title {
    font-size: 2.5rem;
  }
  
  .package-meta {
    flex-direction: column;
    gap: 15px;
  }
  
  .reviews-summary {
    grid-template-columns: 1fr;
    gap: 30px;
  }
  
  .summary-rating {
    border-bottom: 1px solid var(--glass-border);
    padding-bottom: 30px;
  }
  
  .date-range {
    flex-direction: column;
  }
  
  .date-separator {
    display: none;
  }
  
  .cta-title {
    font-size: 2rem;
  }
  
  .cta-buttons {
    flex-direction: column;
    align-items: center;
  }
}

@media (max-width: 480px) {
  .package-title {
    font-size: 2rem;
  }
  
  .highlights-grid {
    grid-template-columns: 1fr;
  }
  
  .gallery-grid {
    grid-template-columns: 1fr;
  }
  
  .carousel-track {
    gap: 20px;
  }
  
  .btn-lg {
    width: 100%;
    max-width: 300px;
    justify-content: center;
  }
}
</style>

<!-- JavaScript for Package Show Page -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  // Traveler counter
  const travelerInput = document.querySelector('.traveler-input');
  const minusBtn = document.querySelector('.traveler-btn.minus');
  const plusBtn = document.querySelector('.traveler-btn.plus');
  
  if (travelerInput && minusBtn && plusBtn) {
    minusBtn.addEventListener('click', function() {
      let value = parseInt(travelerInput.value);
      if (value > parseInt(travelerInput.min)) {
        travelerInput.value = value - 1;
      }
    });
    
    plusBtn.addEventListener('click', function() {
      let value = parseInt(travelerInput.value);
      if (value < parseInt(travelerInput.max)) {
        travelerInput.value = value + 1;
      }
    });
  }
  
  // Form validation
  const inquiryForm = document.getElementById('packageInquiryForm');
  if (inquiryForm) {
    const formValidator = new FormValidator(inquiryForm);
    
    // Add custom validation
    const nameInput = inquiryForm.querySelector('input[name="name"]');
    const phoneInput = inquiryForm.querySelector('input[name="phone"]');
    const emailInput = inquiryForm.querySelector('input[name="email"]');
    
    // Name validation
    if (nameInput) {
      nameInput.addEventListener('blur', function() {
        const name = this.value.trim();
        const errorElement = inquiryForm.querySelector('[data-error="name"]');
        
        if (name.length < 2) {
          errorElement.textContent = 'Name must be at least 2 characters long';
          this.classList.add('error');
        } else {
          errorElement.textContent = '';
          this.classList.remove('error');
        }
      });
    }
    
    // Phone validation
    if (phoneInput) {
      phoneInput.addEventListener('blur', function() {
        const phone = this.value.trim();
        const errorElement = inquiryForm.querySelector('[data-error="phone"]');
        const phoneRegex = /^[\+]?[0-9\s\-\(\)]+$/;
        
        if (!phoneRegex.test(phone.replace(/\s/g, ''))) {
          errorElement.textContent = 'Please enter a valid phone number';
          this.classList.add('error');
        } else {
          errorElement.textContent = '';
          this.classList.remove('error');
        }
      });
    }
    
    // Form submission
    inquiryForm.addEventListener('submit', function(e) {
      e.preventDefault();
      
      // Validate all fields
      let isValid = true;
      const fields = ['name', 'phone', 'email'];
      
      fields.forEach(field => {
        const input = inquiryForm.querySelector(`[name="${field}"]`);
        const errorElement = inquiryForm.querySelector(`[data-error="${field}"]`);
        
        if (input && input.hasAttribute('required') && !input.value.trim()) {
          errorElement.textContent = 'This field is required';
          input.classList.add('error');
          isValid = false;
        }
      });
      
      if (isValid) {
        // Show loading state
        const submitBtn = inquiryForm.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
        submitBtn.disabled = true;
        
        // Simulate form submission
        setTimeout(() => {
          AlertManager.show('Inquiry sent successfully! Our travel expert will contact you within 24 hours.', 'success');
          submitBtn.innerHTML = originalText;
          submitBtn.disabled = false;
          inquiryForm.reset();
          
          // Reset traveler counter
          if (travelerInput) travelerInput.value = '2';
        }, 2000);
      }
    });
  }
  
  // WhatsApp inquiry
  const whatsappBtn = document.getElementById('whatsappInquiry');
  if (whatsappBtn) {
    whatsappBtn.addEventListener('click', function() {
      const packageTitle = document.querySelector('.package-title')?.textContent || 'Travel Package';
      const whatsappMessage = `Hi, I'm interested in the package: ${packageTitle}. Can you provide more details?`;
      const whatsappURL = `https://wa.me/15551234567?text=${encodeURIComponent(whatsappMessage)}`;
      window.open(whatsappURL, '_blank');
    });
  }
  
  // Live chat
  const liveChatBtn = document.getElementById('liveChat');
  if (liveChatBtn) {
    liveChatBtn.addEventListener('click', function() {
      AlertManager.show('Live chat feature coming soon! For now, please use WhatsApp or email.', 'info');
    });
  }
  
  // Gallery lightbox (basic implementation)
  const galleryImages = document.querySelectorAll('.gallery-image');
  galleryImages.forEach(img => {
    img.addEventListener('click', function() {
      // In a real app, you would open a lightbox modal
      AlertManager.show('Gallery lightbox would open here', 'info');
    });
  });
  
  // View full itinerary
  const viewItineraryBtn = document.getElementById('viewFullItinerary');
  if (viewItineraryBtn) {
    viewItineraryBtn.addEventListener('click', function() {
      // In a real app, you would expand the itinerary or show a modal
      AlertManager.show('Full itinerary would be displayed here', 'info');
    });
  }
  
  // Write review
  const writeReviewBtn = document.getElementById('writeReview');
  if (writeReviewBtn) {
    writeReviewBtn.addEventListener('click', function() {
      // In a real app, you would show a review form modal
      AlertManager.show('Review form would open here', 'info');
    });
  }
  
  // Initialize scroll animations
  const scrollAnimates = document.querySelectorAll('.scroll-animate');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('visible');
      }
    });
  }, { threshold: 0.1 });
  
  scrollAnimates.forEach(el => observer.observe(el));
  
  // Initialize similar packages carousel
  const carouselTrack = document.getElementById('similarPackagesCarousel');
  const carouselPrev = document.querySelector('.carousel-prev');
  const carouselNext = document.querySelector('.carousel-next');
  
  if (carouselTrack && carouselPrev && carouselNext) {
    let currentPosition = 0;
    const cardWidth = 350; // Approximate card width with gap
    const maxPosition = (carouselTrack.children.length - 3) * cardWidth;
    
    carouselNext.addEventListener('click', function() {
      if (currentPosition < maxPosition) {
        currentPosition += cardWidth;
        carouselTrack.style.transform = `translateX(-${currentPosition}px)`;
      }
    });
    
    carouselPrev.addEventListener('click', function() {
      if (currentPosition > 0) {
        currentPosition -= cardWidth;
        carouselTrack.style.transform = `translateX(-${currentPosition}px)`;
      }
    });
    
    // Load similar packages (simulated)
    setTimeout(() => {
      if (carouselTrack.children.length === 0) {
        carouselTrack.innerHTML = `
          <div class="package-card" style="min-width: 330px">
            <div class="card-image">
              <img src="${APP_URL}/public/images/packages/similar1.jpg" alt="Similar Package">
            </div>
            <div class="card-content">
              <h3>Similar Luxury Package</h3>
              <p>Experience similar premium travel</p>
              <div class="card-price">
                <span class="price-amount">$3,999</span>
              </div>
            </div>
          </div>
        `;
      }
    }, 500);
  }
});
</script>