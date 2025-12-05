<!-- Hotels Hero -->
<section class="hotels-hero">
  <div class="hero-background">
    <div class="background-overlay"></div>
  </div>
  
  <div class="container">
    <div class="hero-content scroll-animate">
      <h1 class="hero-title">
        <span class="text-gradient">Luxury</span> Hotel Bookings
      </h1>
      <p class="hero-subtitle">
        Discover premium accommodations worldwide with exclusive rates,<br>
        VIP amenities, and personalized service.
      </p>
      
      <!-- Quick Stats -->
      <div class="hero-stats">
        <div class="stat-item">
          <div class="stat-number" data-count="10000">0</div>
          <div class="stat-label">Premium Hotels</div>
        </div>
        <div class="stat-item">
          <div class="stat-number" data-count="150">0</div>
          <div class="stat-label">Countries</div>
        </div>
        <div class="stat-item">
          <div class="stat-number" data-count="24">0</div>
          <div class="stat-label">/7 Concierge</div>
        </div>
        <div class="stat-item">
          <div class="stat-number" data-count="98">0</div>
          <div class="stat-label">% Satisfaction</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Hotel Booking Form -->
<section class="section hotel-booking-section">
  <div class="container">
    <div class="section-header scroll-animate">
      <h2 class="section-title">Find Your Perfect Stay</h2>
      <p class="section-description">
        Search luxury hotels, resorts, and villas with our exclusive partnerships and premium benefits.
      </p>
    </div>
    
    <div class="booking-container scroll-animate">
      <!-- Main Booking Form -->
      <form method="post" class="premium-hotel-form" id="hotelBookingForm">
        <?= csrf_field() ?>
        <input type="hidden" name="inquiry_type" value="hotel">
        
        <div class="form-grid">
          <!-- Destination -->
          <div class="form-group">
            <label class="form-label">
              <i class="fas fa-map-marker-alt"></i>
              Destination *
            </label>
            <div class="location-input">
              <input type="text" 
                     name="destination" 
                     class="form-control location-input-field"
                     placeholder="City, region, or landmark"
                     required
                     autocomplete="off"
                     data-validation="destination">
              <div class="location-suggestions" id="destinationSuggestions"></div>
            </div>
            <div class="form-error" data-error="destination"></div>
          </div>
          
          <!-- Check-in Date -->
          <div class="form-group">
            <label class="form-label">
              <i class="fas fa-sign-in-alt"></i>
              Check-in Date *
            </label>
            <div class="date-input">
              <input type="text" 
                     name="checkin" 
                     class="form-control datepicker checkin-date"
                     placeholder="Select date"
                     required
                     readonly>
              <i class="fas fa-calendar date-icon"></i>
            </div>
            <div class="form-error" data-error="checkin"></div>
          </div>
          
          <!-- Check-out Date -->
          <div class="form-group">
            <label class="form-label">
              <i class="fas fa-sign-out-alt"></i>
              Check-out Date *
            </label>
            <div class="date-input">
              <input type="text" 
                     name="checkout" 
                     class="form-control datepicker checkout-date"
                     placeholder="Select date"
                     required
                     readonly>
              <i class="fas fa-calendar date-icon"></i>
            </div>
            <div class="form-error" data-error="checkout"></div>
          </div>
          
          <!-- Guests & Rooms -->
          <div class="form-group">
            <label class="form-label">
              <i class="fas fa-users"></i>
              Guests & Rooms
            </label>
            <div class="guests-selector" id="guestsSelector">
              <input type="text" 
                     class="form-control guests-summary"
                     value="2 Adults, 1 Room"
                     readonly>
              <i class="fas fa-chevron-down selector-icon"></i>
              
              <!-- Guests Popup -->
              <div class="guests-popup" id="guestsPopup">
                <div class="guests-section">
                  <h4>Rooms</h4>
                  <div class="counter-control">
                    <button type="button" class="counter-btn minus" data-target="rooms">-</button>
                    <input type="number" 
                           name="rooms" 
                           class="form-control counter-value"
                           value="1"
                           min="1"
                           max="5"
                           readonly>
                    <button type="button" class="counter-btn plus" data-target="rooms">+</button>
                  </div>
                </div>
                
                <div class="guests-section">
                  <h4>Adults (18+)</h4>
                  <div class="counter-control">
                    <button type="button" class="counter-btn minus" data-target="adults">-</button>
                    <input type="number" 
                           name="adults" 
                           class="form-control counter-value"
                           value="2"
                           min="1"
                           max="10"
                           readonly>
                    <button type="button" class="counter-btn plus" data-target="adults">+</button>
                  </div>
                </div>
                
                <div class="guests-section">
                  <h4>Children (0-17)</h4>
                  <div class="counter-control">
                    <button type="button" class="counter-btn minus" data-target="children">-</button>
                    <input type="number" 
                           name="children" 
                           class="form-control counter-value"
                           value="0"
                           min="0"
                           max="5"
                           readonly>
                    <button type="button" class="counter-btn plus" data-target="children">+</button>
                  </div>
                  
                  <!-- Child Ages (if children > 0) -->
                  <div class="child-ages" id="childAges" style="display: none;">
                    <h5>Children Ages</h5>
                    <div class="ages-list" id="agesList"></div>
                  </div>
                </div>
                
                <div class="guests-actions">
                  <button type="button" class="btn btn-primary btn-sm" id="applyGuests">
                    <i class="fas fa-check"></i>
                    Apply
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Hotel Preferences -->
        <div class="preferences-section scroll-animate" style="animation-delay: 0.1s">
          <h3 class="preferences-title">
            <i class="fas fa-sliders-h"></i>
            Hotel Preferences
          </h3>
          
          <div class="preferences-grid">
            <!-- Star Rating -->
            <div class="form-group">
              <label class="form-label">
                <i class="fas fa-star"></i>
                Hotel Rating
              </label>
              <div class="star-rating-selector">
                <div class="star-options">
                  <?php for ($i = 1; $i <= 5; $i++): ?>
                    <label class="star-option">
                      <input type="checkbox" name="rating[]" value="<?= $i ?>" <?= $i >= 4 ? 'checked' : '' ?>>
                      <div class="stars">
                        <?php for ($j = 1; $j <= 5; $j++): ?>
                          <i class="fas fa-star <?= $j <= $i ? 'active' : '' ?>"></i>
                        <?php endfor; ?>
                      </div>
                      <span class="rating-text"><?= $i ?> Star<?= $i > 1 ? 's' : '' ?></span>
                    </label>
                  <?php endfor; ?>
                </div>
              </div>
            </div>
            
            <!-- Hotel Chain -->
            <div class="form-group">
              <label class="form-label">
                <i class="fas fa-building"></i>
                Hotel Chain
              </label>
              <div class="select-wrapper">
                <select name="hotel_chain" class="form-control">
                  <option value="">Any Chain</option>
                  <option value="marriott">Marriott International</option>
                  <option value="hilton">Hilton Worldwide</option>
                  <option value="hyatt">Hyatt Hotels</option>
                  <option value="ihg">InterContinental (IHG)</option>
                  <option value="accor">Accor Hotels</option>
                  <option value="four_seasons">Four Seasons</option>
                  <option value="ritz">Ritz-Carlton</option>
                  <option value="st_regis">St. Regis</option>
                </select>
                <i class="fas fa-chevron-down select-icon"></i>
              </div>
            </div>
            
            <!-- Room Type -->
            <div class="form-group">
              <label class="form-label">
                <i class="fas fa-bed"></i>
                Room Type
              </label>
              <div class="select-wrapper">
                <select name="room_type" class="form-control">
                  <option value="">Any Room Type</option>
                  <option value="standard">Standard Room</option>
                  <option value="deluxe">Deluxe Room</option>
                  <option value="executive">Executive Suite</option>
                  <option value="junior">Junior Suite</option>
                  <option value="presidential">Presidential Suite</option>
                  <option value="villa">Private Villa</option>
                </select>
                <i class="fas fa-chevron-down select-icon"></i>
              </div>
            </div>
            
            <!-- Amenities -->
            <div class="form-group">
              <label class="form-label">
                <i class="fas fa-swimming-pool"></i>
                Must-Have Amenities
              </label>
              <div class="amenities-selector">
                <div class="amenities-grid">
                  <label class="amenity-option">
                    <input type="checkbox" name="amenities[]" value="pool">
                    <span class="amenity-checkmark"></span>
                    <i class="fas fa-swimming-pool"></i>
                    <span class="amenity-text">Pool</span>
                  </label>
                  <label class="amenity-option">
                    <input type="checkbox" name="amenities[]" value="spa">
                    <span class="amenity-checkmark"></span>
                    <i class="fas fa-spa"></i>
                    <span class="amenity-text">Spa</span>
                  </label>
                  <label class="amenity-option">
                    <input type="checkbox" name="amenities[]" value="gym">
                    <span class="amenity-checkmark"></span>
                    <i class="fas fa-dumbbell"></i>
                    <span class="amenity-text">Gym</span>
                  </label>
                  <label class="amenity-option">
                    <input type="checkbox" name="amenities[]" value="wifi">
                    <span class="amenity-checkmark"></span>
                    <i class="fas fa-wifi"></i>
                    <span class="amenity-text">Free WiFi</span>
                  </label>
                  <label class="amenity-option">
                    <input type="checkbox" name="amenities[]" value="breakfast">
                    <span class="amenity-checkmark"></span>
                    <i class="fas fa-coffee"></i>
                    <span class="amenity-text">Breakfast</span>
                  </label>
                  <label class="amenity-option">
                    <input type="checkbox" name="amenities[]" value="parking">
                    <span class="amenity-checkmark"></span>
                    <i class="fas fa-parking"></i>
                    <span class="amenity-text">Parking</span>
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Price Range -->
        <div class="price-range-section scroll-animate" style="animation-delay: 0.2s">
          <h3 class="price-title">
            <i class="fas fa-money-bill-wave"></i>
            Price Range (per night)
          </h3>
          
          <div class="price-slider-container">
            <div class="price-display">
              <span class="price-min">$100</span>
              <span class="price-separator">-</span>
              <span class="price-max">$1000</span>
            </div>
            
            <div class="slider-container">
              <input type="range" 
                     min="100" 
                     max="1000" 
                     value="100" 
                     class="range-slider" 
                     id="priceMin">
              <input type="range" 
                     min="100" 
                     max="1000" 
                     value="1000" 
                     class="range-slider" 
                     id="priceMax">
              <div class="slider-track">
                <div class="slider-range" id="priceRange"></div>
              </div>
            </div>
            
            <div class="price-inputs">
              <input type="hidden" name="price_min" id="priceMinValue" value="100">
              <input type="hidden" name="price_max" id="priceMaxValue" value="1000">
            </div>
          </div>
        </div>
        
        <!-- Special Requests -->
        <div class="special-requests scroll-animate" style="animation-delay: 0.3s">
          <h3 class="requests-title">
            <i class="fas fa-concierge-bell"></i>
            Special Requests
          </h3>
          
          <div class="requests-grid">
            <label class="request-option">
              <input type="checkbox" name="special_requests[]" value="early_checkin">
              <span class="request-checkmark"></span>
              <i class="fas fa-clock"></i>
              <div class="request-text">
                <span class="request-title">Early Check-in</span>
                <span class="request-desc">Guaranteed from 12 PM</span>
              </div>
            </label>
            
            <label class="request-option">
              <input type="checkbox" name="special_requests[]" value="late_checkout">
              <span class="request-checkmark"></span>
              <i class="fas fa-clock"></i>
              <div class="request-text">
                <span class="request-title">Late Check-out</span>
                <span class="request-desc">Until 4 PM</span>
              </div>
            </label>
            
            <label class="request-option">
              <input type="checkbox" name="special_requests[]" value="honeymoon">
              <span class="request-checkmark"></span>
              <i class="fas fa-heart"></i>
              <div class="request-text">
                <span class="request-title">Honeymoon</span>
                <span class="request-desc">Special amenities</span>
              </div>
            </label>
            
            <label class="request-option">
              <input type="checkbox" name="special_requests[]" value="airport_transfer">
              <span class="request-checkmark"></span>
              <i class="fas fa-car"></i>
              <div class="request-text">
                <span class="request-title">Airport Transfer</span>
                <span class="request-desc">Private car service</span>
              </div>
            </label>
            
            <label class="request-option">
              <input type="checkbox" name="special_requests[]" value="connecting_rooms">
              <span class="request-checkmark"></span>
              <i class="fas fa-door-open"></i>
              <div class="request-text">
                <span class="request-title">Connecting Rooms</span>
                <span class="request-desc">For families or groups</span>
              </div>
            </label>
            
            <label class="request-option">
              <input type="checkbox" name="special_requests[]" value="all_inclusive">
              <span class="request-checkmark"></span>
              <i class="fas fa-utensils"></i>
              <div class="request-text">
                <span class="request-title">All-Inclusive</span>
                <span class="request-desc">Meals & drinks included</span>
              </div>
            </label>
          </div>
          
          <div class="additional-requests">
            <label class="form-label">
              <i class="fas fa-comment-alt"></i>
              Additional Requests
            </label>
            <textarea name="additional_requests" 
                      class="form-control"
                      rows="3"
                      placeholder="Any other special requests or requirements..."></textarea>
          </div>
        </div>
        
        <!-- Form Actions -->
        <div class="form-actions scroll-animate" style="animation-delay: 0.4s">
          <button type="submit" class="btn btn-primary btn-lg btn-search">
            <i class="fas fa-search"></i>
            <span>Search Luxury Hotels</span>
          </button>
          <button type="button" class="btn btn-outline btn-lg" id="quickBookingBtn">
            <i class="fas fa-bolt"></i>
            <span>Quick Booking Assistance</span>
          </button>
        </div>
        
        <!-- Form Footer -->
        <div class="form-footer">
          <p class="form-note">
            <i class="fas fa-shield-alt"></i>
            Best price guaranteed. Found cheaper? We'll match it plus 10% off.
          </p>
          <p class="form-note">
            <i class="fas fa-gift"></i>
            VIP members get free room upgrades, late check-out, and breakfast.
          </p>
        </div>
      </form>
    </div>
    
    <!-- Popular Destinations -->
    <div class="popular-destinations scroll-animate" style="animation-delay: 0.5s">
      <h3 class="destinations-title">
        <i class="fas fa-fire"></i>
        Popular Luxury Destinations
      </h3>
      
      <div class="destinations-grid">
        <div class="destination-card" data-destination="paris">
          <div class="destination-image">
            <img src="<?= APP_URL ?>/public/images/destinations/paris.jpg" alt="Paris">
            <div class="destination-overlay">
              <span class="destination-tag">Most Romantic</span>
            </div>
          </div>
          <div class="destination-content">
            <h4>Paris, France</h4>
            <div class="destination-details">
              <span><i class="fas fa-star"></i> 5-star from $350</span>
              <span><i class="fas fa-hotel"></i> 245+ Hotels</span>
            </div>
            <button class="btn btn-outline btn-sm" data-quick-search="paris">
              <i class="fas fa-search"></i>
              Explore Hotels
            </button>
          </div>
        </div>
        
        <div class="destination-card" data-destination="maldives">
          <div class="destination-image">
            <img src="<?= APP_URL ?>/public/images/destinations/maldives.jpg" alt="Maldives">
            <div class="destination-overlay">
              <span class="destination-tag">Best Beach</span>
            </div>
          </div>
          <div class="destination-content">
            <h4>Maldives</h4>
            <div class="destination-details">
              <span><i class="fas fa-star"></i> Overwater from $600</span>
              <span><i class="fas fa-hotel"></i> 150+ Resorts</span>
            </div>
            <button class="btn btn-outline btn-sm" data-quick-search="maldives">
              <i class="fas fa-search"></i>
              Explore Hotels
            </button>
          </div>
        </div>
        
        <div class="destination-card" data-destination="dubai">
          <div class="destination-image">
            <img src="<?= APP_URL ?>/public/images/destinations/dubai.jpg" alt="Dubai">
            <div class="destination-overlay">
              <span class="destination-tag">Ultra Luxury</span>
            </div>
          </div>
          <div class="destination-content">
            <h4>Dubai, UAE</h4>
            <div class="destination-details">
              <span><i class="fas fa-star"></i> 7-star from $450</span>
              <span><i class="fas fa-hotel"></i> 320+ Hotels</span>
            </div>
            <button class="btn btn-outline btn-sm" data-quick-search="dubai">
              <i class="fas fa-search"></i>
              Explore Hotels
            </button>
          </div>
        </div>
        
        <div class="destination-card" data-destination="bali">
          <div class="destination-image">
            <img src="<?= APP_URL ?>/public/images/destinations/bali.jpg" alt="Bali">
            <div class="destination-overlay">
              <span class="destination-tag">Top Rated</span>
            </div>
          </div>
          <div class="destination-content">
            <h4>Bali, Indonesia</h4>
            <div class="destination-details">
              <span><i class="fas fa-star"></i> Villas from $200</span>
              <span><i class="fas fa-hotel"></i> 500+ Properties</span>
            </div>
            <button class="btn btn-outline btn-sm" data-quick-search="bali">
              <i class="fas fa-search"></i>
              Explore Hotels
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Hotel Chains Showcase -->
<section class="section hotel-chains-section">
  <div class="container">
    <div class="section-header scroll-animate">
      <h2 class="section-title">Premium Hotel Partners</h2>
      <p class="section-description">
        We partner with the world's finest hotel chains to bring you exclusive rates and VIP benefits.
      </p>
    </div>
    
    <div class="chains-grid scroll-animate" style="animation-delay: 0.1s">
      <div class="chain-card">
        <div class="chain-logo">
          <i class="fas fa-crown chain-icon"></i>
        </div>
        <h4>Four Seasons</h4>
        <p>Unparalleled luxury & personalized service</p>
        <span class="chain-benefit">Free Breakfast</span>
      </div>
      
      <div class="chain-card">
        <div class="chain-logo">
          <i class="fas fa-gem chain-icon"></i>
        </div>
        <h4>Ritz-Carlton</h4>
        <p>Legendary service & elegant accommodations</p>
        <span class="chain-benefit">Room Upgrade</span>
      </div>
      
      <div class="chain-card">
        <div class="chain-logo">
          <i class="fas fa-star chain-icon"></i>
        </div>
        <h4>St. Regis</h4>
        <p>Signature Butler Service & timeless elegance</p>
        <span class="chain-benefit">Late Check-out</span>
      </div>
      
      <div class="chain-card">
        <div class="chain-logo">
          <i class="fas fa-umbrella-beach chain-icon"></i>
        </div>
        <h4>Aman Resorts</h4>
        <p>Secluded luxury in stunning destinations</p>
        <span class="chain-benefit">Spa Credit</span>
      </div>
      
      <div class="chain-card">
        <div class="chain-logo">
          <i class="fas fa-water chain-icon"></i>
        </div>
        <h4>Six Senses</h4>
        <p>Wellness-focused sustainable luxury</p>
        <span class="chain-benefit">Wellness Activity</span>
      </div>
      
      <div class="chain-card">
        <div class="chain-logo">
          <i class="fas fa-spa chain-icon"></i>
        </div>
        <h4>COMO Hotels</h4>
        <p>Holistic wellness & contemporary design</p>
        <span class="chain-benefit">Yoga Class</span>
      </div>
    </div>
  </div>
</section>

<!-- Benefits Section -->
<section class="section benefits-section">
  <div class="container">
    <div class="benefits-grid scroll-animate">
      <div class="benefit-card">
        <div class="benefit-icon">
          <i class="fas fa-percentage"></i>
        </div>
        <h3>Exclusive Rates</h3>
        <p>Access member-only rates not available anywhere else. Up to 40% off public rates.</p>
      </div>
      
      <div class="benefit-card">
        <div class="benefit-icon">
          <i class="fas fa-gift"></i>
        </div>
        <h3>VIP Amenities</h3>
        <p>Free breakfast, room upgrades, late check-out, and resort credits on eligible bookings.</p>
      </div>
      
      <div class="benefit-card">
        <div class="benefit-icon">
          <i class="fas fa-shield-alt"></i>
        </div>
        <h3>Flexible Cancellation</h3>
        <p>Most bookings offer free cancellation up to 24-48 hours before check-in.</p>
      </div>
      
      <div class="benefit-card">
        <div class="benefit-icon">
          <i class="fas fa-headset"></i>
        </div>
        <h3>24/7 Support</h3>
        <p>Dedicated travel concierge available round the clock for any assistance needed.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="section cta-section">
  <div class="container">
    <div class="cta-content scroll-animate">
      <div class="cta-text">
        <h2 class="cta-title">Need Hotel Recommendations?</h2>
        <p class="cta-description">
          Our hotel experts can help you find the perfect luxury accommodation for your needs.
        </p>
      </div>
      
      <div class="cta-buttons">
        <a href="tel:+15551234567" class="btn btn-primary btn-lg">
          <i class="fas fa-phone-alt"></i>
          <span>Call an Expert</span>
        </a>
        <a href="index.php?page=contact" class="btn btn-secondary btn-lg">
          <i class="fas fa-envelope"></i>
          <span>Email Request</span>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- CSS for Hotels Page -->
<style>
/* Hotels Hero */
.hotels-hero {
  position: relative;
  min-height: 70vh;
  display: flex;
  align-items: center;
  color: white;
  overflow: hidden;
  background: linear-gradient(135deg, var(--deep-ocean-blue), var(--midnight-navy));
}

.hotels-hero .hero-background {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: url('<?= APP_URL ?>/public/images/hotels-hero.jpg') center/cover;
}

.hotels-hero .background-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(135deg, rgba(10, 61, 98, 0.9), rgba(6, 32, 52, 0.95));
}

.hotels-hero .hero-content {
  position: relative;
  z-index: 2;
  text-align: center;
  padding: 100px 0 60px;
}

.hotels-hero .hero-title {
  font-size: 3.5rem;
  margin-bottom: 20px;
  color: white;
  background: none;
}

.hotels-hero .hero-subtitle {
  font-size: 1.2rem;
  opacity: 0.9;
  margin-bottom: 40px;
  line-height: 1.6;
  max-width: 800px;
  margin-left: auto;
  margin-right: auto;
}

.hotels-hero .hero-stats {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 40px;
  margin-top: 60px;
}

.hotels-hero .stat-item {
  text-align: center;
}

.hotels-hero .stat-number {
  font-size: 2.5rem;
  font-weight: 700;
  color: var(--sunset-gold);
  margin-bottom: 5px;
}

.hotels-hero .stat-label {
  font-size: 0.9rem;
  opacity: 0.8;
  text-transform: uppercase;
  letter-spacing: 1px;
}

/* Hotel Booking Form */
.hotel-booking-section {
  background: linear-gradient(135deg, #f8f9ff 0%, #eef2ff 100%);
  padding: 80px 0;
}

.booking-container {
  max-width: 1200px;
  margin: 0 auto;
  background: white;
  border-radius: 25px;
  padding: 40px;
  box-shadow: var(--shadow-lg);
}

/* Form Grid */
.form-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 25px;
  margin-bottom: 40px;
}

@media (max-width: 1024px) {
  .form-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 768px) {
  .form-grid {
    grid-template-columns: 1fr;
  }
}

/* Location Suggestions */
.location-input {
  position: relative;
}

.location-suggestions {
  position: absolute;
  top: 100%;
  left: 0;
  right: 0;
  background: white;
  border: 1px solid var(--glass-border);
  border-radius: 12px;
  box-shadow: var(--shadow-lg);
  z-index: 100;
  max-height: 300px;
  overflow-y: auto;
  display: none;
  margin-top: 5px;
}

.location-suggestion {
  padding: 15px 20px;
  cursor: pointer;
  transition: all var(--transition-fast);
  display: flex;
  align-items: center;
  gap: 15px;
}

.location-suggestion:hover {
  background: var(--glass-bg);
}

.location-suggestion i {
  color: var(--horizon-cyan);
  font-size: 1.2rem;
}

/* Guests Selector */
.guests-selector {
  position: relative;
}

.guests-summary {
  cursor: pointer;
  background: white;
}

.selector-icon {
  position: absolute;
  right: 20px;
  top: 50%;
  transform: translateY(-50%);
  color: var(--horizon-cyan);
  pointer-events: none;
}

.guests-popup {
  position: absolute;
  top: 100%;
  left: 0;
  right: 0;
  background: white;
  border: 1px solid var(--glass-border);
  border-radius: 15px;
  box-shadow: var(--shadow-lg);
  padding: 25px;
  z-index: 100;
  display: none;
  margin-top: 5px;
}

.guests-selector.active .guests-popup {
  display: block;
}

.guests-selector.active .selector-icon {
  transform: translateY(-50%) rotate(180deg);
}

.guests-section {
  margin-bottom: 25px;
}

.guests-section h4 {
  margin: 0 0 15px 0;
  color: var(--deep-ocean-blue);
  font-size: 1rem;
}

.counter-control {
  display: flex;
  align-items: center;
  gap: 15px;
}

.counter-btn {
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

.counter-btn:hover {
  border-color: var(--horizon-cyan);
  color: var(--horizon-cyan);
}

.counter-value {
  width: 60px;
  text-align: center;
  font-weight: 700;
  font-size: 1.2rem;
}

.child-ages {
  margin-top: 15px;
  padding-top: 15px;
  border-top: 1px solid var(--glass-border);
}

.child-ages h5 {
  margin: 0 0 10px 0;
  color: rgba(var(--midnight-navy), 0.7);
  font-size: 0.9rem;
}

.ages-list {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
}

.age-select {
  padding: 8px 12px;
  border: 1px solid var(--glass-border);
  border-radius: 6px;
  font-size: 0.9rem;
  color: var(--midnight-navy);
  cursor: pointer;
  transition: all var(--transition-fast);
}

.age-select:hover {
  border-color: var(--horizon-cyan);
}

.age-select.active {
  background: var(--horizon-cyan);
  color: white;
  border-color: var(--horizon-cyan);
}

.guests-actions {
  text-align: right;
  padding-top: 20px;
  border-top: 1px solid var(--glass-border);
}

/* Preferences Section */
.preferences-section {
  margin-bottom: 40px;
}

.preferences-title {
  display: flex;
  align-items: center;
  gap: 10px;
  color: var(--deep-ocean-blue);
  margin-bottom: 25px;
  font-size: 1.5rem;
}

.preferences-title i {
  color: var(--sunset-gold);
}

.preferences-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 30px;
  padding: 30px;
  background: var(--glass-bg);
  border: 1px solid var(--glass-border);
  border-radius: 15px;
}

@media (max-width: 768px) {
  .preferences-grid {
    grid-template-columns: 1fr;
  }
}

/* Star Rating Selector */
.star-rating-selector {
  padding: 10px 0;
}

.star-options {
  display: flex;
  flex-direction: column;
  gap: 12px;
}

.star-option {
  display: flex;
  align-items: center;
  gap: 12px;
  cursor: pointer;
  padding: 5px 0;
}

.star-option input {
  display: none;
}

.stars {
  margin-right: 10px;
}

.stars i {
  color: #ddd;
  font-size: 1rem;
}

.stars i.active {
  color: var(--sunset-gold);
}

.star-option input:checked + .stars i {
  color: var(--sunset-gold);
}

.rating-text {
  font-size: 0.95rem;
  color: rgba(var(--midnight-navy), 0.8);
}

/* Amenities Selector */
.amenities-selector {
  padding: 10px 0;
}

.amenities-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 15px;
}

@media (max-width: 480px) {
  .amenities-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

.amenity-option {
  display: flex;
  align-items: center;
  gap: 10px;
  cursor: pointer;
  padding: 10px;
  border-radius: 8px;
  transition: all var(--transition-fast);
}

.amenity-option:hover {
  background: rgba(34, 166, 179, 0.1);
}

.amenity-option input {
  display: none;
}

.amenity-checkmark {
  width: 20px;
  height: 20px;
  border: 2px solid var(--glass-border);
  border-radius: 4px;
  position: relative;
  flex-shrink: 0;
}

.amenity-option input:checked + .amenity-checkmark {
  background: var(--horizon-cyan);
  border-color: var(--horizon-cyan);
}

.amenity-option input:checked + .amenity-checkmark::after {
  content: '✓';
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  font-size: 0.8rem;
  font-weight: bold;
}

.amenity-option i {
  color: var(--horizon-cyan);
  font-size: 1.1rem;
  width: 20px;
  text-align: center;
}

.amenity-text {
  font-size: 0.9rem;
  color: rgba(var(--midnight-navy), 0.8);
}

/* Price Range */
.price-range-section {
  margin-bottom: 40px;
}

.price-title {
  display: flex;
  align-items: center;
  gap: 10px;
  color: var(--deep-ocean-blue);
  margin-bottom: 25px;
  font-size: 1.5rem;
}

.price-title i {
  color: var(--sunset-gold);
}

.price-slider-container {
  padding: 30px;
  background: var(--glass-bg);
  border: 1px solid var(--glass-border);
  border-radius: 15px;
}

.price-display {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  margin-bottom: 30px;
  font-size: 1.5rem;
  font-weight: 700;
  color: var(--sunset-gold);
}

.price-separator {
  color: rgba(var(--midnight-navy), 0.5);
}

.slider-container {
  position: relative;
  height: 40px;
  margin: 0 10px;
}

.range-slider {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  width: 100%;
  height: 4px;
  background: transparent;
  pointer-events: none;
  -webkit-appearance: none;
}

.range-slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  width: 24px;
  height: 24px;
  background: var(--sunset-gold);
  border-radius: 50%;
  cursor: pointer;
  pointer-events: all;
  box-shadow: 0 2px 6px rgba(0,0,0,0.2);
}

.slider-track {
  position: absolute;
  top: 50%;
  left: 0;
  right: 0;
  height: 4px;
  background: var(--glass-border);
  border-radius: 2px;
  transform: translateY(-50%);
}

.slider-range {
  position: absolute;
  top: 50%;
  height: 4px;
  background: linear-gradient(to right, var(--sunset-gold), var(--horizon-cyan));
  border-radius: 2px;
  transform: translateY(-50%);
}

/* Special Requests */
.special-requests {
  margin-bottom: 40px;
}

.requests-title {
  display: flex;
  align-items: center;
  gap: 10px;
  color: var(--deep-ocean-blue);
  margin-bottom: 25px;
  font-size: 1.5rem;
}

.requests-title i {
  color: var(--sunset-gold);
}

.requests-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 20px;
  margin-bottom: 30px;
}

@media (max-width: 768px) {
  .requests-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 480px) {
  .requests-grid {
    grid-template-columns: 1fr;
  }
}

.request-option {
  display: flex;
  align-items: center;
  gap: 15px;
  padding: 20px;
  background: var(--glass-bg);
  border: 1px solid var(--glass-border);
  border-radius: 12px;
  cursor: pointer;
  transition: all var(--transition-fast);
}

.request-option:hover {
  background: white;
  box-shadow: var(--shadow-md);
}

.request-option input {
  display: none;
}

.request-checkmark {
  width: 22px;
  height: 22px;
  border: 2px solid var(--glass-border);
  border-radius: 6px;
  position: relative;
  flex-shrink: 0;
}

.request-option input:checked + .request-checkmark {
  background: var(--horizon-cyan);
  border-color: var(--horizon-cyan);
}

.request-option input:checked + .request-checkmark::after {
  content: '✓';
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  font-size: 0.8rem;
  font-weight: bold;
}

.request-option i {
  color: var(--sunset-gold);
  font-size: 1.3rem;
  width: 24px;
  text-align: center;
}

.request-text {
  flex: 1;
}

.request-title {
  display: block;
  font-weight: 600;
  color: var(--midnight-navy);
  margin-bottom: 4px;
  font-size: 0.95rem;
}

.request-desc {
  display: block;
  font-size: 0.85rem;
  color: rgba(var(--midnight-navy), 0.6);
}

.additional-requests {
  margin-top: 30px;
}

/* Form Actions */
.form-actions {
  display: flex;
  gap: 20px;
  justify-content: center;
  margin-bottom: 30px;
}

.btn-search {
  padding: 20px 40px;
  font-size: 1.2rem;
  border-radius: 15px;
}

/* Form Footer */
.form-footer {
  text-align: center;
  padding-top: 30px;
  border-top: 1px solid var(--glass-border);
}

.form-note {
  color: rgba(var(--midnight-navy), 0.6);
  font-size: 0.9rem;
  margin-bottom: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
}

/* Popular Destinations */
.popular-destinations {
  margin-top: 80px;
}

.destinations-title {
  display: flex;
  align-items: center;
  gap: 10px;
  color: var(--deep-ocean-blue);
  margin-bottom: 40px;
  font-size: 2rem;
}

.destinations-title i {
  color: var(--sunset-gold);
}

.destinations-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 30px;
}

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
  height: 200px;
  overflow: hidden;
}

.destination-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform var(--transition-normal);
}

.destination-card:hover .destination-image img {
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
  align-items: flex-end;
}

.destination-tag {
  background: var(--sunset-gold);
  color: white;
  padding: 6px 12px;
  border-radius: 4px;
  font-size: 0.8rem;
  font-weight: 600;
}

.destination-content {
  padding: 25px;
}

.destination-content h4 {
  margin: 0 0 15px 0;
  color: var(--deep-ocean-blue);
  font-size: 1.3rem;
}

.destination-details {
  display: flex;
  flex-direction: column;
  gap: 8px;
  margin-bottom: 20px;
}

.destination-details span {
  display: flex;
  align-items: center;
  gap: 8px;
  font-size: 0.9rem;
  color: rgba(var(--midnight-navy), 0.7);
}

.destination-details i {
  color: var(--horizon-cyan);
}

.destination-content .btn {
  width: 100%;
  justify-content: center;
}

/* Hotel Chains */
.hotel-chains-section {
  background: linear-gradient(135deg, #f8f9ff 0%, #eef2ff 100%);
}

.chains-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 30px;
}

.chain-card {
  text-align: center;
  padding: 40px 30px;
  background: white;
  border-radius: 20px;
  box-shadow: var(--shadow-md);
  transition: all var(--transition-normal);
}

.chain-card:hover {
  transform: translateY(-10px);
  box-shadow: var(--shadow-lg);
}

.chain-logo {
  width: 80px;
  height: 80px;
  background: linear-gradient(135deg, var(--sunset-gold), var(--horizon-cyan));
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 25px;
}

.chain-icon {
  font-size: 2.5rem;
  color: white;
}

.chain-card h4 {
  margin: 0 0 10px 0;
  color: var(--deep-ocean-blue);
  font-size: 1.3rem;
}

.chain-card p {
  margin: 0 0 15px 0;
  color: rgba(var(--midnight-navy), 0.7);
  font-size: 0.95rem;
  line-height: 1.5;
}

.chain-benefit {
  display: inline-block;
  padding: 6px 15px;
  background: rgba(34, 166, 179, 0.1);
  color: var(--horizon-cyan);
  border-radius: 20px;
  font-size: 0.85rem;
  font-weight: 600;
}

/* Benefits Section */
.benefits-section {
  background: linear-gradient(135deg, var(--deep-ocean-blue), var(--midnight-navy));
  color: white;
}

.benefits-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 40px;
}

.benefit-card {
  text-align: center;
  padding: 40px 30px;
  background: rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 20px;
  transition: all var(--transition-normal);
}

.benefit-card:hover {
  background: rgba(255, 255, 255, 0.1);
  transform: translateY(-10px);
}

.benefit-icon {
  width: 80px;
  height: 80px;
  background: linear-gradient(135deg, var(--sunset-gold), var(--horizon-cyan));
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 25px;
  font-size: 2rem;
  color: white;
}

.benefit-card h3 {
  margin: 0 0 15px 0;
  color: white;
  font-size: 1.3rem;
}

.benefit-card p {
  margin: 0;
  opacity: 0.8;
  font-size: 0.95rem;
  line-height: 1.5;
}

/* CTA Section */
.cta-section {
  background: white;
}

.cta-content {
  max-width: 800px;
  margin: 0 auto;
  text-align: center;
  padding: 80px 40px;
  border-radius: 30px;
  background: linear-gradient(135deg, var(--deep-ocean-blue), var(--midnight-navy));
  color: white;
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
@media (max-width: 768px) {
  .hotels-hero .hero-title {
    font-size: 2.5rem;
  }
  
  .booking-container {
    padding: 30px 20px;
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
  .hotels-hero .hero-title {
    font-size: 2rem;
  }
  
  .hotels-hero .hero-stats {
    gap: 30px;
  }
  
  .hotels-hero .stat-number {
    font-size: 2rem;
  }
  
  .destinations-grid {
    grid-template-columns: 1fr;
  }
  
  .form-actions {
    flex-direction: column;
  }
  
  .btn-search {
    width: 100%;
  }
}
</style>

<!-- JavaScript for Hotels Page -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  // Animated counter for hero stats
  const statNumbers = document.querySelectorAll('.stat-number');
  statNumbers.forEach(stat => {
    const target = parseInt(stat.getAttribute('data-count'));
    const suffix = stat.textContent.includes('%') ? '%' : '';
    let current = 0;
    const increment = target / 50;
    const timer = setInterval(() => {
      current += increment;
      if (current >= target) {
        current = target;
        clearInterval(timer);
      }
      stat.textContent = Math.floor(current) + suffix;
    }, 30);
  });
  
  // Location suggestions
  const popularDestinations = [
    { name: 'Paris, France', country: 'France', type: 'city' },
    { name: 'London, UK', country: 'United Kingdom', type: 'city' },
    { name: 'New York City, USA', country: 'USA', type: 'city' },
    { name: 'Dubai, UAE', country: 'United Arab Emirates', type: 'city' },
    { name: 'Tokyo, Japan', country: 'Japan', type: 'city' },
    { name: 'Bangkok, Thailand', country: 'Thailand', type: 'city' },
    { name: 'Singapore', country: 'Singapore', type: 'city' },
    { name: 'Sydney, Australia', country: 'Australia', type: 'city' },
    { name: 'Rome, Italy', country: 'Italy', type: 'city' },
    { name: 'Barcelona, Spain', country: 'Spain', type: 'city' },
    { name: 'Bali, Indonesia', country: 'Indonesia', type: 'island' },
    { name: 'Maldives', country: 'Maldives', type: 'island' },
    { name: 'Santorini, Greece', country: 'Greece', type: 'island' },
    { name: 'Maui, Hawaii', country: 'USA', type: 'island' },
    { name: 'Phuket, Thailand', country: 'Thailand', type: 'island' }
  ];
  
  const destinationInput = document.querySelector('.location-input-field');
  const destinationSuggestions = document.getElementById('destinationSuggestions');
  
  if (destinationInput && destinationSuggestions) {
    destinationInput.addEventListener('input', function() {
      const value = this.value.toLowerCase();
      if (value.length < 2) {
        destinationSuggestions.style.display = 'none';
        return;
      }
      
      const filtered = popularDestinations.filter(dest => 
        dest.name.toLowerCase().includes(value) || 
        dest.country.toLowerCase().includes(value)
      );
      
      if (filtered.length > 0) {
        destinationSuggestions.innerHTML = filtered.map(dest => `
          <div class="location-suggestion" data-value="${dest.name}">
            <i class="fas fa-${dest.type === 'city' ? 'city' : 'umbrella-beach'}"></i>
            <div class="suggestion-info">
              <div class="suggestion-name">${dest.name}</div>
              <div class="suggestion-code">${dest.country} • ${dest.type.charAt(0).toUpperCase() + dest.type.slice(1)}</div>
            </div>
          </div>
        `).join('');
        
        destinationSuggestions.style.display = 'block';
        
        // Add click handlers to suggestions
        destinationSuggestions.querySelectorAll('.location-suggestion').forEach(suggestion => {
          suggestion.addEventListener('click', function() {
            destinationInput.value = this.dataset.value;
            destinationSuggestions.style.display = 'none';
          });
        });
      } else {
        destinationSuggestions.style.display = 'none';
      }
    });
    
    destinationInput.addEventListener('focus', function() {
      if (this.value.length >= 2) {
        destinationSuggestions.style.display = 'block';
      }
    });
    
    // Close suggestions when clicking outside
    document.addEventListener('click', function(e) {
      if (!destinationInput.contains(e.target) && !destinationSuggestions.contains(e.target)) {
        destinationSuggestions.style.display = 'none';
      }
    });
  }
  
  // Date pickers with date range validation
  const checkinInput = document.querySelector('.checkin-date');
  const checkoutInput = document.querySelector('.checkout-date');
  
  if (checkinInput && checkoutInput) {
    // Set min dates
    const today = new Date();
    const tomorrow = new Date(today);
    tomorrow.setDate(tomorrow.getDate() + 1);
    
    const formatDate = (date) => date.toISOString().split('T')[0];
    
    checkinInput.addEventListener('click', function() {
      this.type = 'date';
      this.min = formatDate(today);
      this.showPicker();
    });
    
    checkinInput.addEventListener('change', function() {
      this.type = 'text';
      if (this.value) {
        const date = new Date(this.value);
        this.value = date.toLocaleDateString('en-US', { 
          weekday: 'short', 
          month: 'short', 
          day: 'numeric',
          year: 'numeric'
        });
        
        // Set checkout min date to checkin + 1 day
        const minCheckout = new Date(date);
        minCheckout.setDate(minCheckout.getDate() + 1);
        checkoutInput.min = formatDate(minCheckout);
      }
    });
    
    checkoutInput.addEventListener('click', function() {
      this.type = 'date';
      const checkinValue = checkinInput.value ? new Date(checkinInput.value) : tomorrow;
      this.min = formatDate(new Date(checkinValue.getTime() + 86400000)); // +1 day
      this.showPicker();
    });
    
    checkoutInput.addEventListener('change', function() {
      this.type = 'text';
      if (this.value) {
        const date = new Date(this.value);
        this.value = date.toLocaleDateString('en-US', { 
          weekday: 'short', 
          month: 'short', 
          day: 'numeric',
          year: 'numeric'
        });
      }
    });
  }
  
  // Guests selector
  const guestsSelector = document.getElementById('guestsSelector');
  const guestsPopup = document.getElementById('guestsPopup');
  const guestsSummary = document.querySelector('.guests-summary');
  
  if (guestsSelector && guestsPopup && guestsSummary) {
    guestsSelector.addEventListener('click', function(e) {
      e.stopPropagation();
      this.classList.toggle('active');
    });
    
    // Counter functionality
    const counterButtons = guestsPopup.querySelectorAll('.counter-btn');
    counterButtons.forEach(btn => {
      btn.addEventListener('click', function() {
        const target = this.dataset.target;
        const input = this.parentElement.querySelector('.counter-value');
        let value = parseInt(input.value);
        
        if (this.classList.contains('minus')) {
          if (value > parseInt(input.min)) {
            input.value = value - 1;
          }
        } else {
          if (value < parseInt(input.max)) {
            input.value = value + 1;
          }
        }
        
        // Show/hide child ages
        if (target === 'children') {
          const childAges = document.getElementById('childAges');
          const agesList = document.getElementById('agesList');
          const childrenCount = parseInt(document.querySelector('[name="children"]').value);
          
          if (childrenCount > 0) {
            childAges.style.display = 'block';
            
            // Generate age selectors
            agesList.innerHTML = '';
            for (let i = 0; i < childrenCount; i++) {
              const ageSelect = document.createElement('div');
              ageSelect.className = 'age-select';
              ageSelect.textContent = `${i + 1} year${i === 0 ? '' : 's'} old`;
              ageSelect.dataset.age = i + 1;
              ageSelect.addEventListener('click', function() {
                this.classList.toggle('active');
              });
              agesList.appendChild(ageSelect);
            }
          } else {
            childAges.style.display = 'none';
          }
        }
        
        updateGuestsSummary();
      });
    });
    
    // Apply guests button
    const applyGuestsBtn = document.getElementById('applyGuests');
    if (applyGuestsBtn) {
      applyGuestsBtn.addEventListener('click', function() {
        guestsSelector.classList.remove('active');
      });
    }
    
    function updateGuestsSummary() {
      const adults = parseInt(document.querySelector('[name="adults"]').value) || 0;
      const children = parseInt(document.querySelector('[name="children"]').value) || 0;
      const rooms = parseInt(document.querySelector('[name="rooms"]').value) || 1;
      
      let summary = `${adults} Adult${adults !== 1 ? 's' : ''}`;
      if (children > 0) {
        summary += `, ${children} Child${children !== 1 ? 'ren' : ''}`;
      }
      summary += `, ${rooms} Room${rooms !== 1 ? 's' : ''}`;
      
      guestsSummary.value = summary;
    }
    
    // Close popup when clicking outside
    document.addEventListener('click', function(e) {
      if (!guestsSelector.contains(e.target)) {
        guestsSelector.classList.remove('active');
      }
    });
    
    // Initialize
    updateGuestsSummary();
  }
  
  // Price range slider
  const priceMinSlider = document.getElementById('priceMin');
  const priceMaxSlider = document.getElementById('priceMax');
  const priceRange = document.getElementById('priceRange');
  const priceMinValue = document.getElementById('priceMinValue');
  const priceMaxValue = document.getElementById('priceMaxValue');
  const priceMinDisplay = document.querySelector('.price-min');
  const priceMaxDisplay = document.querySelector('.price-max');
  
  if (priceMinSlider && priceMaxSlider && priceRange) {
    function updatePriceRange() {
      const min = parseInt(priceMinSlider.value);
      const max = parseInt(priceMaxSlider.value);
      
      // Ensure min doesn't exceed max
      if (min > max) {
        priceMinSlider.value = max;
        priceMaxSlider.value = min;
        updatePriceRange();
        return;
      }
      
      // Update range display
      const minPercent = ((min - 100) / 900) * 100;
      const maxPercent = ((max - 100) / 900) * 100;
      
      priceRange.style.left = `${minPercent}%`;
      priceRange.style.width = `${maxPercent - minPercent}%`;
      
      // Update display values
      priceMinDisplay.textContent = `$${min}`;
      priceMaxDisplay.textContent = `$${max}`;
      
      // Update hidden inputs
      if (priceMinValue) priceMinValue.value = min;
      if (priceMaxValue) priceMaxValue.value = max;
    }
    
    priceMinSlider.addEventListener('input', updatePriceRange);
    priceMaxSlider.addEventListener('input', updatePriceRange);
    
    // Initialize
    updatePriceRange();
  }
  
  // Quick booking assistance
  const quickBookingBtn = document.getElementById('quickBookingBtn');
  if (quickBookingBtn) {
    quickBookingBtn.addEventListener('click', function() {
      AlertManager.show('Our hotel experts will contact you within 30 minutes with personalized recommendations!', 'info');
      
      // In a real app, you would submit a quick booking request
      setTimeout(() => {
        window.location.href = 'index.php?page=contact';
      }, 1500);
    });
  }
  
  // Quick search for popular destinations
  const quickSearchBtns = document.querySelectorAll('[data-quick-search]');
  quickSearchBtns.forEach(btn => {
    btn.addEventListener('click', function() {
      const destination = this.dataset.quickSearch;
      const destinationNames = {
        'paris': 'Paris, France',
        'maldives': 'Maldives',
        'dubai': 'Dubai, UAE',
        'bali': 'Bali, Indonesia'
      };
      
      AlertManager.show(`Searching luxury hotels in ${destinationNames[destination] || destination}...`, 'success');
      
      // Pre-fill the form
      if (destinationInput) {
        destinationInput.value = destinationNames[destination] || destination;
      }
      
      // Set dates to next month
      const nextMonth = new Date();
      nextMonth.setMonth(nextMonth.getMonth() + 1);
      const checkin = nextMonth;
      const checkout = new Date(nextMonth);
      checkout.setDate(checkout.getDate() + 3);
      
      if (checkinInput) {
        checkinInput.value = checkin.toLocaleDateString('en-US', { 
          weekday: 'short', 
          month: 'short', 
          day: 'numeric',
          year: 'numeric'
        });
      }
      
      if (checkoutInput) {
        checkoutInput.value = checkout.toLocaleDateString('en-US', { 
          weekday: 'short', 
          month: 'short', 
          day: 'numeric',
          year: 'numeric'
        });
      }
      
      // Scroll to form
      document.querySelector('.booking-container').scrollIntoView({ 
        behavior: 'smooth',
        block: 'start'
      });
    });
  });
  
  // Form submission
  const hotelForm = document.getElementById('hotelBookingForm');
  if (hotelForm) {
    hotelForm.addEventListener('submit', function(e) {
      e.preventDefault();
      
      // Basic validation
      const destinationInput = this.querySelector('[name="destination"]');
      const checkinInput = this.querySelector('[name="checkin"]');
      const checkoutInput = this.querySelector('[name="checkout"]');
      let isValid = true;
      
      [destinationInput, checkinInput, checkoutInput].forEach(input => {
        if (input && !input.value.trim()) {
          input.classList.add('error');
          isValid = false;
        } else if (input) {
          input.classList.remove('error');
        }
      });
      
      if (isValid) {
        // Show loading state
        const submitBtn = this.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Searching...';
        submitBtn.disabled = true;
        
        // Simulate search
        setTimeout(() => {
          AlertManager.show('Searching for luxury hotels... Redirecting to results.', 'success');
          submitBtn.innerHTML = originalText;
          submitBtn.disabled = false;
          
          // In a real app, you would submit the form or redirect to results page
          // For now, we'll simulate a successful search
          setTimeout(() => {
            window.location.href = 'index.php?page=hotels_results';
          }, 1500);
        }, 2000);
      } else {
        AlertManager.show('Please fill in all required fields', 'error');
      }
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
});
</script>