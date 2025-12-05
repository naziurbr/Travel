<!-- Flights Hero -->
<section class="flights-hero">
  <div class="hero-background">
    <div class="background-overlay"></div>
  </div>
  
  <div class="container">
    <div class="hero-content scroll-animate">
      <h1 class="hero-title">
        <span class="text-gradient">Premium</span> Flight Booking
      </h1>
      <p class="hero-subtitle">
        Book luxury flights to destinations worldwide with our exclusive airline partnerships<br>
        and premium customer service.
      </p>
      
      <!-- Quick Stats -->
      <div class="hero-stats">
        <div class="stat-item">
          <div class="stat-number" data-count="500">0</div>
          <div class="stat-label">Destinations</div>
        </div>
        <div class="stat-item">
          <div class="stat-number" data-count="50">0</div>
          <div class="stat-label">Airline Partners</div>
        </div>
        <div class="stat-item">
          <div class="stat-number" data-count="24">0</div>
          <div class="stat-label">/7 Support</div>
        </div>
        <div class="stat-item">
          <div class="stat-number" data-count="99">0</div>
          <div class="stat-label">% Satisfaction</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Flight Booking Form -->
<section class="section flight-booking-section">
  <div class="container">
    <div class="section-header scroll-animate">
      <h2 class="section-title">Find Your Perfect Flight</h2>
      <p class="section-description">
        Search and compare premium flights with our exclusive rates and flexible booking options.
      </p>
    </div>
    
    <div class="booking-container scroll-animate">
      <!-- Form Tabs -->
      <div class="form-tabs">
        <button class="tab-btn active" data-tab="round-trip">
          <i class="fas fa-exchange-alt"></i>
          Round Trip
        </button>
        <button class="tab-btn" data-tab="one-way">
          <i class="fas fa-plane-departure"></i>
          One Way
        </button>
        <button class="tab-btn" data-tab="multi-city">
          <i class="fas fa-map-signs"></i>
          Multi-City
        </button>
        <button class="tab-btn" data-tab="business">
          <i class="fas fa-briefcase"></i>
          Business Class
        </button>
        <button class="tab-btn" data-tab="first">
          <i class="fas fa-crown"></i>
          First Class
        </button>
      </div>
      
      <!-- Main Booking Form -->
      <form method="post" class="premium-flight-form" id="flightBookingForm">
        <?= csrf_field() ?>
        <input type="hidden" name="inquiry_type" value="flight">
        <input type="hidden" name="trip_type" value="round-trip" id="tripType">
        
        <!-- Round Trip Form (Default) -->
        <div class="form-tab-content active" id="round-trip-form">
          <div class="form-grid">
            <!-- From Location -->
            <div class="form-group">
              <label class="form-label">
                <i class="fas fa-plane-departure"></i>
                Flying From *
              </label>
              <div class="location-input">
                <input type="text" 
                       name="from" 
                       class="form-control location-from"
                       placeholder="City or Airport"
                       required
                       autocomplete="off"
                       data-validation="location">
                <div class="location-suggestions" id="fromSuggestions"></div>
              </div>
              <div class="form-error" data-error="from"></div>
            </div>
            
            <!-- To Location -->
            <div class="form-group">
              <label class="form-label">
                <i class="fas fa-plane-arrival"></i>
                Flying To *
              </label>
              <div class="location-input">
                <input type="text" 
                       name="to" 
                       class="form-control location-to"
                       placeholder="City or Airport"
                       required
                       autocomplete="off"
                       data-validation="location">
                <div class="location-suggestions" id="toSuggestions"></div>
              </div>
              <div class="form-error" data-error="to"></div>
            </div>
            
            <!-- Departure Date -->
            <div class="form-group">
              <label class="form-label">
                <i class="fas fa-calendar-alt"></i>
                Departure Date *
              </label>
              <div class="date-input">
                <input type="text" 
                       name="departure" 
                       class="form-control datepicker"
                       placeholder="Select date"
                       required
                       readonly>
                <i class="fas fa-calendar date-icon"></i>
              </div>
              <div class="form-error" data-error="departure"></div>
            </div>
            
            <!-- Return Date -->
            <div class="form-group">
              <label class="form-label">
                <i class="fas fa-calendar-check"></i>
                Return Date *
              </label>
              <div class="date-input">
                <input type="text" 
                       name="return" 
                       class="form-control datepicker"
                       placeholder="Select date"
                       required
                       readonly>
                <i class="fas fa-calendar date-icon"></i>
              </div>
              <div class="form-error" data-error="return"></div>
            </div>
          </div>
        </div>
        
        <!-- One Way Form -->
        <div class="form-tab-content" id="one-way-form">
          <div class="form-grid">
            <!-- From Location -->
            <div class="form-group">
              <label class="form-label">
                <i class="fas fa-plane-departure"></i>
                Flying From *
              </label>
              <div class="location-input">
                <input type="text" 
                       name="oneway_from" 
                       class="form-control location-from"
                       placeholder="City or Airport"
                       required
                       autocomplete="off">
                <div class="location-suggestions" id="onewayFromSuggestions"></div>
              </div>
            </div>
            
            <!-- To Location -->
            <div class="form-group">
              <label class="form-label">
                <i class="fas fa-plane-arrival"></i>
                Flying To *
              </label>
              <div class="location-input">
                <input type="text" 
                       name="oneway_to" 
                       class="form-control location-to"
                       placeholder="City or Airport"
                       required
                       autocomplete="off">
                <div class="location-suggestions" id="onewayToSuggestions"></div>
              </div>
            </div>
            
            <!-- Departure Date -->
            <div class="form-group">
              <label class="form-label">
                <i class="fas fa-calendar-alt"></i>
                Departure Date *
              </label>
              <div class="date-input">
                <input type="text" 
                       name="oneway_departure" 
                       class="form-control datepicker"
                       placeholder="Select date"
                       required
                       readonly>
                <i class="fas fa-calendar date-icon"></i>
              </div>
            </div>
            
            <!-- Empty cell for grid alignment -->
            <div class="form-group"></div>
          </div>
        </div>
        
        <!-- Traveler Details -->
        <div class="traveler-details scroll-animate" style="animation-delay: 0.1s">
          <h3 class="details-title">
            <i class="fas fa-users"></i>
            Traveler Details
          </h3>
          
          <div class="traveler-grid">
            <!-- Cabin Class -->
            <div class="form-group">
              <label class="form-label">
                <i class="fas fa-chair"></i>
                Cabin Class
              </label>
              <div class="select-wrapper">
                <select name="cabin_class" class="form-control select-class">
                  <option value="economy">Economy Class</option>
                  <option value="premium_economy">Premium Economy</option>
                  <option value="business" selected>Business Class</option>
                  <option value="first">First Class</option>
                </select>
                <i class="fas fa-chevron-down select-icon"></i>
              </div>
            </div>
            
            <!-- Adults -->
            <div class="form-group">
              <label class="form-label">
                <i class="fas fa-user"></i>
                Adults (12+)
              </label>
              <div class="counter-input">
                <button type="button" class="counter-btn minus" data-target="adults">-</button>
                <input type="number" 
                       name="adults" 
                       class="form-control counter-value"
                       value="1"
                       min="1"
                       max="9"
                       readonly>
                <button type="button" class="counter-btn plus" data-target="adults">+</button>
              </div>
            </div>
            
            <!-- Children -->
            <div class="form-group">
              <label class="form-label">
                <i class="fas fa-child"></i>
                Children (2-11)
              </label>
              <div class="counter-input">
                <button type="button" class="counter-btn minus" data-target="children">-</button>
                <input type="number" 
                       name="children" 
                       class="form-control counter-value"
                       value="0"
                       min="0"
                       max="9"
                       readonly>
                <button type="button" class="counter-btn plus" data-target="children">+</button>
              </div>
            </div>
            
            <!-- Infants -->
            <div class="form-group">
              <label class="form-label">
                <i class="fas fa-baby"></i>
                Infants (0-2)
              </label>
              <div class="counter-input">
                <button type="button" class="counter-btn minus" data-target="infants">-</button>
                <input type="number" 
                       name="infants" 
                       class="form-control counter-value"
                       value="0"
                       min="0"
                       max="2"
                       readonly>
                <button type="button" class="counter-btn plus" data-target="infants">+</button>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Advanced Options -->
        <div class="advanced-options scroll-animate" style="animation-delay: 0.2s">
          <button type="button" class="options-toggle" id="advancedOptionsToggle">
            <i class="fas fa-sliders-h"></i>
            <span>Advanced Options</span>
            <i class="fas fa-chevron-down toggle-icon"></i>
          </button>
          
          <div class="options-content" id="advancedOptionsContent">
            <div class="options-grid">
              <!-- Preferred Airlines -->
              <div class="form-group">
                <label class="form-label">
                  <i class="fas fa-plane"></i>
                  Preferred Airlines
                </label>
                <div class="select-wrapper">
                  <select name="preferred_airlines[]" class="form-control select-multiple" multiple>
                    <option value="emirates">Emirates</option>
                    <option value="qatar">Qatar Airways</option>
                    <option value="singapore">Singapore Airlines</option>
                    <option value="cathay">Cathay Pacific</option>
                    <option value="etihad">Etihad Airways</option>
                    <option value="lufthansa">Lufthansa</option>
                    <option value="british">British Airways</option>
                    <option value="airfrance">Air France</option>
                  </select>
                  <i class="fas fa-chevron-down select-icon"></i>
                </div>
              </div>
              
              <!-- Max Stops -->
              <div class="form-group">
                <label class="form-label">
                  <i class="fas fa-exchange-alt"></i>
                  Maximum Stops
                </label>
                <div class="radio-group">
                  <label class="radio-option">
                    <input type="radio" name="max_stops" value="0" checked>
                    <span class="radio-checkmark"></span>
                    <span class="radio-label">Non-stop</span>
                  </label>
                  <label class="radio-option">
                    <input type="radio" name="max_stops" value="1">
                    <span class="radio-checkmark"></span>
                    <span class="radio-label">1 Stop</span>
                  </label>
                  <label class="radio-option">
                    <input type="radio" name="max_stops" value="2">
                    <span class="radio-checkmark"></span>
                    <span class="radio-label">2 Stops</span>
                  </label>
                </div>
              </div>
              
              <!-- Baggage -->
              <div class="form-group">
                <label class="form-label">
                  <i class="fas fa-suitcase"></i>
                  Baggage Preference
                </label>
                <div class="select-wrapper">
                  <select name="baggage" class="form-control">
                    <option value="standard">Standard (23kg)</option>
                    <option value="extra">Extra Baggage (32kg)</option>
                    <option value="premium">Premium (2x 32kg)</option>
                  </select>
                  <i class="fas fa-chevron-down select-icon"></i>
                </div>
              </div>
              
              <!-- Meal Preference -->
              <div class="form-group">
                <label class="form-label">
                  <i class="fas fa-utensils"></i>
                  Meal Preference
                </label>
                <div class="select-wrapper">
                  <select name="meal_preference" class="form-control">
                    <option value="any">Any</option>
                    <option value="vegetarian">Vegetarian</option>
                    <option value="vegan">Vegan</option>
                    <option value="halal">Halal</option>
                    <option value="kosher">Kosher</option>
                  </select>
                  <i class="fas fa-chevron-down select-icon"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Form Actions -->
        <div class="form-actions scroll-animate" style="animation-delay: 0.3s">
          <button type="submit" class="btn btn-primary btn-lg btn-search">
            <i class="fas fa-search"></i>
            <span>Search Premium Flights</span>
          </button>
          <button type="button" class="btn btn-outline btn-lg" id="quickQuoteBtn">
            <i class="fas fa-bolt"></i>
            <span>Get Quick Quote</span>
          </button>
        </div>
        
        <!-- Form Footer -->
        <div class="form-footer">
          <p class="form-note">
            <i class="fas fa-shield-alt"></i>
            All searches are confidential. We never share your information.
          </p>
          <p class="form-note">
            <i class="fas fa-star"></i>
            Premium members get exclusive discounts and flexible cancellation.
          </p>
        </div>
      </form>
    </div>
    
    <!-- Popular Routes -->
    <div class="popular-routes scroll-animate" style="animation-delay: 0.4s">
      <h3 class="routes-title">
        <i class="fas fa-fire"></i>
        Popular Routes
      </h3>
      
      <div class="routes-grid">
        <div class="route-card" data-route="london-newyork">
          <div class="route-info">
            <h4>London → New York</h4>
            <div class="route-details">
              <span><i class="fas fa-clock"></i> 7h 30m</span>
              <span><i class="fas fa-pound-sign"></i> From £499</span>
            </div>
          </div>
          <button class="btn btn-outline btn-sm" data-quick-book="london-newyork">
            <i class="fas fa-bolt"></i>
            Quick Book
          </button>
        </div>
        
        <div class="route-card" data-route="dubai-maldives">
          <div class="route-info">
            <h4>Dubai → Maldives</h4>
            <div class="route-details">
              <span><i class="fas fa-clock"></i> 4h 15m</span>
              <span><i class="fas fa-dollar-sign"></i> From $699</span>
            </div>
          </div>
          <button class="btn btn-outline btn-sm" data-quick-book="dubai-maldives">
            <i class="fas fa-bolt"></i>
            Quick Book
          </button>
        </div>
        
        <div class="route-card" data-route="singapore-bali">
          <div class="route-info">
            <h4>Singapore → Bali</h4>
            <div class="route-details">
              <span><i class="fas fa-clock"></i> 2h 30m</span>
              <span><i class="fas fa-dollar-sign"></i> From $299</span>
            </div>
          </div>
          <button class="btn btn-outline btn-sm" data-quick-book="singapore-bali">
            <i class="fas fa-bolt"></i>
            Quick Book
          </button>
        </div>
        
        <div class="route-card" data-route="tokyo-sydney">
          <div class="route-info">
            <h4>Tokyo → Sydney</h4>
            <div class="route-details">
              <span><i class="fas fa-clock"></i> 9h 45m</span>
              <span><i class="fas fa-dollar-sign"></i> From $899</span>
            </div>
          </div>
          <button class="btn btn-outline btn-sm" data-quick-book="tokyo-sydney">
            <i class="fas fa-bolt"></i>
            Quick Book
          </button>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Airline Partners -->
<section class="section airline-partners-section">
  <div class="container">
    <div class="section-header scroll-animate">
      <h2 class="section-title">Premium Airline Partners</h2>
      <p class="section-description">
        We partner with the world's leading airlines to bring you exclusive rates and premium services.
      </p>
    </div>
    
    <div class="airline-grid scroll-animate" style="animation-delay: 0.1s">
      <div class="airline-card">
        <div class="airline-logo">
          <i class="fas fa-plane airline-icon emirates"></i>
        </div>
        <h4>Emirates</h4>
        <p>Luxury experience with chauffeur service</p>
      </div>
      
      <div class="airline-card">
        <div class="airline-logo">
          <i class="fas fa-plane airline-icon qatar"></i>
        </div>
        <h4>Qatar Airways</h4>
        <p>World's best business class</p>
      </div>
      
      <div class="airline-card">
        <div class="airline-logo">
          <i class="fas fa-plane airline-icon singapore"></i>
        </div>
        <h4>Singapore Airlines</h4>
        <p>Award-winning service & suites</p>
      </div>
      
      <div class="airline-card">
        <div class="airline-logo">
          <i class="fas fa-plane airline-icon etihad"></i>
        </div>
        <h4>Etihad Airways</h4>
        <p>The Residence & first class apartments</p>
      </div>
      
      <div class="airline-card">
        <div class="airline-logo">
          <i class="fas fa-plane airline-icon cathay"></i>
        </div>
        <h4>Cathay Pacific</h4>
        <p>Asian hospitality excellence</p>
      </div>
      
      <div class="airline-card">
        <div class="airline-logo">
          <i class="fas fa-plane airline-icon lufthansa"></i>
        </div>
        <h4>Lufthansa</h4>
        <p>German engineering & comfort</p>
      </div>
    </div>
  </div>
</section>

<!-- Features Section -->
<section class="section features-section">
  <div class="container">
    <div class="features-grid scroll-animate">
      <div class="feature-card">
        <div class="feature-icon">
          <i class="fas fa-percentage"></i>
        </div>
        <h3>Best Price Guarantee</h3>
        <p>We guarantee the best prices for premium flights. Found cheaper? We'll match it.</p>
      </div>
      
      <div class="feature-card">
        <div class="feature-icon">
          <i class="fas fa-headset"></i>
        </div>
        <h3>24/7 Concierge</h3>
        <p>Dedicated travel experts available round the clock for assistance and support.</p>
      </div>
      
      <div class="feature-card">
        <div class="feature-icon">
          <i class="fas fa-shield-alt"></i>
        </div>
        <h3>Flexible Booking</h3>
        <p>Free date changes and cancellations on most premium bookings.</p>
      </div>
      
      <div class="feature-card">
        <div class="feature-icon">
          <i class="fas fa-gift"></i>
        </div>
        <h3>Exclusive Perks</h3>
        <p>Lounge access, priority boarding, and extra baggage on selected airlines.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="section cta-section">
  <div class="container">
    <div class="cta-content scroll-animate">
      <div class="cta-text">
        <h2 class="cta-title">Need Personalized Assistance?</h2>
        <p class="cta-description">
          Our flight experts can help you find the perfect premium flight experience.
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

<!-- CSS for Flights Page -->
<style>
/* Flights Hero */
.flights-hero {
  position: relative;
  min-height: 70vh;
  display: flex;
  align-items: center;
  color: white;
  overflow: hidden;
  background: linear-gradient(135deg, var(--deep-ocean-blue), var(--midnight-navy));
}

.flights-hero .hero-background {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: url('<?= APP_URL ?>/public/images/flights-hero.jpg') center/cover;
}

.flights-hero .background-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(135deg, rgba(10, 61, 98, 0.9), rgba(6, 32, 52, 0.95));
}

.flights-hero .hero-content {
  position: relative;
  z-index: 2;
  text-align: center;
  padding: 100px 0 60px;
}

.flights-hero .hero-title {
  font-size: 3.5rem;
  margin-bottom: 20px;
  color: white;
  background: none;
}

.flights-hero .hero-subtitle {
  font-size: 1.2rem;
  opacity: 0.9;
  margin-bottom: 40px;
  line-height: 1.6;
  max-width: 800px;
  margin-left: auto;
  margin-right: auto;
}

.flights-hero .hero-stats {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 40px;
  margin-top: 60px;
}

.flights-hero .stat-item {
  text-align: center;
}

.flights-hero .stat-number {
  font-size: 2.5rem;
  font-weight: 700;
  color: var(--sunset-gold);
  margin-bottom: 5px;
}

.flights-hero .stat-label {
  font-size: 0.9rem;
  opacity: 0.8;
  text-transform: uppercase;
  letter-spacing: 1px;
}

/* Flight Booking Form */
.flight-booking-section {
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

/* Form Tabs */
.form-tabs {
  display: flex;
  gap: 10px;
  margin-bottom: 40px;
  flex-wrap: wrap;
}

.tab-btn {
  display: flex;
  align-items: center;
  gap: 10px;
  padding: 15px 25px;
  background: var(--glass-bg);
  border: 1px solid var(--glass-border);
  border-radius: 12px;
  color: var(--midnight-navy);
  font-weight: 600;
  cursor: pointer;
  transition: all var(--transition-normal);
  white-space: nowrap;
}

.tab-btn:hover {
  background: var(--horizon-cyan);
  color: white;
  border-color: var(--horizon-cyan);
}

.tab-btn.active {
  background: linear-gradient(135deg, var(--sunset-gold), var(--horizon-cyan));
  color: white;
  border-color: transparent;
}

.tab-btn i {
  font-size: 1.1rem;
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

/* Form Tab Content */
.form-tab-content {
  display: none;
}

.form-tab-content.active {
  display: block;
}

/* Location Input with Suggestions */
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

.suggestion-info {
  flex: 1;
}

.suggestion-name {
  font-weight: 600;
  color: var(--midnight-navy);
}

.suggestion-code {
  font-size: 0.9rem;
  color: rgba(var(--midnight-navy), 0.6);
}

/* Date Input */
.date-input {
  position: relative;
}

.date-icon {
  position: absolute;
  right: 20px;
  top: 50%;
  transform: translateY(-50%);
  color: var(--horizon-cyan);
  pointer-events: none;
}

/* Traveler Details */
.traveler-details {
  background: var(--glass-bg);
  border: 1px solid var(--glass-border);
  border-radius: 15px;
  padding: 30px;
  margin-bottom: 30px;
}

.details-title {
  display: flex;
  align-items: center;
  gap: 10px;
  color: var(--deep-ocean-blue);
  margin-bottom: 25px;
  font-size: 1.5rem;
}

.details-title i {
  color: var(--sunset-gold);
}

.traveler-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 25px;
}

@media (max-width: 768px) {
  .traveler-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 480px) {
  .traveler-grid {
    grid-template-columns: 1fr;
  }
}

/* Counter Input */
.counter-input {
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

/* Select Wrapper */
.select-wrapper {
  position: relative;
}

.select-icon {
  position: absolute;
  right: 20px;
  top: 50%;
  transform: translateY(-50%);
  color: var(--horizon-cyan);
  pointer-events: none;
}

.select-multiple {
  height: 120px;
}

/* Radio Group */
.radio-group {
  display: flex;
  gap: 20px;
  flex-wrap: wrap;
}

.radio-option {
  display: flex;
  align-items: center;
  gap: 10px;
  cursor: pointer;
}

.radio-option input {
  display: none;
}

.radio-checkmark {
  width: 20px;
  height: 20px;
  border-radius: 50%;
  border: 2px solid var(--glass-border);
  position: relative;
  transition: all var(--transition-fast);
}

.radio-option input:checked + .radio-checkmark {
  border-color: var(--horizon-cyan);
}

.radio-option input:checked + .radio-checkmark::after {
  content: '';
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background: var(--horizon-cyan);
}

.radio-label {
  color: rgba(var(--midnight-navy), 0.8);
  font-size: 0.95rem;
}

/* Advanced Options */
.advanced-options {
  margin-bottom: 40px;
}

.options-toggle {
  display: flex;
  align-items: center;
  gap: 10px;
  padding: 15px 25px;
  background: var(--glass-bg);
  border: 1px solid var(--glass-border);
  border-radius: 12px;
  color: var(--midnight-navy);
  font-weight: 600;
  cursor: pointer;
  transition: all var(--transition-normal);
  width: 100%;
  text-align: left;
}

.options-toggle:hover {
  background: var(--horizon-cyan);
  color: white;
  border-color: var(--horizon-cyan);
}

.options-toggle.active .toggle-icon {
  transform: rotate(180deg);
}

.toggle-icon {
  margin-left: auto;
  transition: transform var(--transition-normal);
}

.options-content {
  max-height: 0;
  overflow: hidden;
  transition: max-height var(--transition-normal);
  margin-top: 0;
}

.options-content.expanded {
  max-height: 500px;
  margin-top: 20px;
}

.options-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 25px;
  padding: 25px;
  background: rgba(255, 255, 255, 0.5);
  border-radius: 15px;
}

@media (max-width: 768px) {
  .options-grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

@media (max-width: 480px) {
  .options-grid {
    grid-template-columns: 1fr;
  }
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

/* Popular Routes */
.popular-routes {
  margin-top: 60px;
}

.routes-title {
  display: flex;
  align-items: center;
  gap: 10px;
  color: var(--deep-ocean-blue);
  margin-bottom: 30px;
  font-size: 1.8rem;
}

.routes-title i {
  color: var(--sunset-gold);
}

.routes-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 25px;
}

.route-card {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 25px;
  background: white;
  border-radius: 15px;
  box-shadow: var(--shadow-md);
  transition: all var(--transition-normal);
}

.route-card:hover {
  transform: translateY(-5px);
  box-shadow: var(--shadow-lg);
}

.route-info h4 {
  margin: 0 0 10px 0;
  color: var(--deep-ocean-blue);
}

.route-details {
  display: flex;
  gap: 20px;
  font-size: 0.9rem;
  color: rgba(var(--midnight-navy), 0.7);
}

.route-details i {
  color: var(--horizon-cyan);
  margin-right: 5px;
}

/* Airline Partners */
.airline-partners-section {
  background: white;
}

.airline-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  gap: 30px;
}

.airline-card {
  text-align: center;
  padding: 30px;
  background: var(--glass-bg);
  border: 1px solid var(--glass-border);
  border-radius: 15px;
  transition: all var(--transition-normal);
}

.airline-card:hover {
  transform: translateY(-10px);
  box-shadow: var(--shadow-lg);
}

.airline-logo {
  width: 80px;
  height: 80px;
  margin: 0 auto 20px;
  display: flex;
  align-items: center;
  justify-content: center;
}

.airline-icon {
  font-size: 2.5rem;
  color: var(--horizon-cyan);
}

.airline-icon.emirates { color: #d71921; }
.airline-icon.qatar { color: #8d1e3b; }
.airline-icon.singapore { color: #00447c; }
.airline-icon.etihad { color: #bd8b13; }
.airline-icon.cathay { color: #e2001a; }
.airline-icon.lufthansa { color: #05164d; }

.airline-card h4 {
  margin: 0 0 10px 0;
  color: var(--deep-ocean-blue);
}

.airline-card p {
  margin: 0;
  color: rgba(var(--midnight-navy), 0.7);
  font-size: 0.9rem;
}

/* Features Section */
.features-section {
  background: linear-gradient(135deg, var(--deep-ocean-blue), var(--midnight-navy));
  color: white;
}

.features-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 40px;
}

.feature-card {
  text-align: center;
  padding: 40px 30px;
  background: rgba(255, 255, 255, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.1);
  border-radius: 20px;
  transition: all var(--transition-normal);
}

.feature-card:hover {
  background: rgba(255, 255, 255, 0.1);
  transform: translateY(-10px);
}

.feature-icon {
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

.feature-card h3 {
  margin: 0 0 15px 0;
  color: white;
  font-size: 1.3rem;
}

.feature-card p {
  margin: 0;
  opacity: 0.8;
  font-size: 0.95rem;
  line-height: 1.5;
}

/* CTA Section */
.cta-section {
  background: linear-gradient(135deg, #f8f9ff 0%, #eef2ff 100%);
}

.cta-content {
  max-width: 800px;
  margin: 0 auto;
  text-align: center;
  padding: 80px 40px;
  border-radius: 30px;
  background: white;
  box-shadow: var(--shadow-lg);
}

.cta-title {
  font-size: 2.5rem;
  margin-bottom: 20px;
  color: var(--deep-ocean-blue);
}

.cta-description {
  font-size: 1.2rem;
  color: rgba(var(--midnight-navy), 0.7);
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
  .flights-hero .hero-title {
    font-size: 2.5rem;
  }
  
  .booking-container {
    padding: 30px 20px;
  }
  
  .form-tabs {
    overflow-x: auto;
    padding-bottom: 10px;
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
  .flights-hero .hero-title {
    font-size: 2rem;
  }
  
  .flights-hero .hero-stats {
    gap: 30px;
  }
  
  .flights-hero .stat-number {
    font-size: 2rem;
  }
  
  .routes-grid {
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

<!-- JavaScript for Flights Page -->
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
  
  // Form tabs functionality
  const tabBtns = document.querySelectorAll('.tab-btn');
  const tabContents = document.querySelectorAll('.form-tab-content');
  const tripTypeInput = document.getElementById('tripType');
  
  tabBtns.forEach(btn => {
    btn.addEventListener('click', function() {
      const tabId = this.dataset.tab;
      
      // Update active tab
      tabBtns.forEach(b => b.classList.remove('active'));
      this.classList.add('active');
      
      // Show corresponding form
      tabContents.forEach(content => {
        content.classList.remove('active');
        if (content.id === `${tabId}-form`) {
          content.classList.add('active');
        }
      });
      
      // Update hidden trip type
      tripTypeInput.value = tabId;
      
      // Update form validation for one-way trips
      if (tabId === 'one-way') {
        document.querySelector('input[name="return"]').removeAttribute('required');
      } else {
        document.querySelector('input[name="return"]').setAttribute('required', 'required');
      }
    });
  });
  
  // Location suggestions
  const popularLocations = [
    { name: 'London Heathrow', code: 'LHR', country: 'UK', type: 'airport' },
    { name: 'New York JFK', code: 'JFK', country: 'USA', type: 'airport' },
    { name: 'Dubai International', code: 'DXB', country: 'UAE', type: 'airport' },
    { name: 'Singapore Changi', code: 'SIN', country: 'Singapore', type: 'airport' },
    { name: 'Tokyo Haneda', code: 'HND', country: 'Japan', type: 'airport' },
    { name: 'Sydney', code: 'SYD', country: 'Australia', type: 'airport' },
    { name: 'Paris Charles de Gaulle', code: 'CDG', country: 'France', type: 'airport' },
    { name: 'Los Angeles', code: 'LAX', country: 'USA', type: 'airport' },
    { name: 'Hong Kong', code: 'HKG', country: 'China', type: 'airport' },
    { name: 'Bangkok Suvarnabhumi', code: 'BKK', country: 'Thailand', type: 'airport' }
  ];
  
  function showLocationSuggestions(input, suggestionsContainer) {
    const value = input.value.toLowerCase();
    if (value.length < 2) {
      suggestionsContainer.style.display = 'none';
      return;
    }
    
    const filtered = popularLocations.filter(loc => 
      loc.name.toLowerCase().includes(value) || 
      loc.code.toLowerCase().includes(value) ||
      loc.country.toLowerCase().includes(value)
    );
    
    if (filtered.length > 0) {
      suggestionsContainer.innerHTML = filtered.map(loc => `
        <div class="location-suggestion" data-value="${loc.name} (${loc.code})">
          <i class="fas fa-plane"></i>
          <div class="suggestion-info">
            <div class="suggestion-name">${loc.name}</div>
            <div class="suggestion-code">${loc.code} • ${loc.country}</div>
          </div>
        </div>
      `).join('');
      
      suggestionsContainer.style.display = 'block';
      
      // Add click handlers to suggestions
      suggestionsContainer.querySelectorAll('.location-suggestion').forEach(suggestion => {
        suggestion.addEventListener('click', function() {
          input.value = this.dataset.value;
          suggestionsContainer.style.display = 'none';
        });
      });
    } else {
      suggestionsContainer.style.display = 'none';
    }
  }
  
  // Initialize location inputs
  const locationInputs = document.querySelectorAll('.location-from, .location-to');
  locationInputs.forEach(input => {
    const suggestionsId = input.classList.contains('location-from') ? 'fromSuggestions' : 'toSuggestions';
    const suggestionsContainer = document.getElementById(suggestionsId);
    
    input.addEventListener('input', function() {
      showLocationSuggestions(this, suggestionsContainer);
    });
    
    input.addEventListener('focus', function() {
      if (this.value.length >= 2) {
        showLocationSuggestions(this, suggestionsContainer);
      }
    });
    
    // Close suggestions when clicking outside
    document.addEventListener('click', function(e) {
      if (!input.contains(e.target) && !suggestionsContainer.contains(e.target)) {
        suggestionsContainer.style.display = 'none';
      }
    });
  });
  
  // Date pickers
  const dateInputs = document.querySelectorAll('.datepicker');
  dateInputs.forEach(input => {
    // Set min date to today
    const today = new Date().toISOString().split('T')[0];
    
    // Create simple date picker (in real app, use a library like flatpickr)
    input.addEventListener('click', function() {
      this.type = 'date';
      this.min = today;
      this.showPicker();
    });
    
    input.addEventListener('blur', function() {
      this.type = 'text';
    });
    
    // Format date on change
    input.addEventListener('change', function() {
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
  });
  
  // Traveler counters
  const counterButtons = document.querySelectorAll('.counter-btn');
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
      
      // Update total travelers display
      updateTotalTravelers();
    });
  });
  
  function updateTotalTravelers() {
    const adults = parseInt(document.querySelector('[name="adults"]').value) || 0;
    const children = parseInt(document.querySelector('[name="children"]').value) || 0;
    const infants = parseInt(document.querySelector('[name="infants"]').value) || 0;
    const total = adults + children + infants;
    
    // Update any total display if needed
    const totalDisplay = document.getElementById('totalTravelers');
    if (totalDisplay) {
      totalDisplay.textContent = total;
    }
  }
  
  // Advanced options toggle
  const optionsToggle = document.getElementById('advancedOptionsToggle');
  const optionsContent = document.getElementById('advancedOptionsContent');
  
  if (optionsToggle && optionsContent) {
    optionsToggle.addEventListener('click', function() {
      this.classList.toggle('active');
      optionsContent.classList.toggle('expanded');
    });
  }
  
  // Quick quote button
  const quickQuoteBtn = document.getElementById('quickQuoteBtn');
  if (quickQuoteBtn) {
    quickQuoteBtn.addEventListener('click', function() {
      AlertManager.show('Our travel experts will contact you within 1 hour with the best flight options!', 'info');
      
      // In a real app, you would submit a quick quote request
      setTimeout(() => {
        window.location.href = 'index.php?page=contact';
      }, 1500);
    });
  }
  
  // Quick book for popular routes
  const quickBookBtns = document.querySelectorAll('[data-quick-book]');
  quickBookBtns.forEach(btn => {
    btn.addEventListener('click', function() {
      const route = this.dataset.quickBook;
      const routeNames = {
        'london-newyork': 'London to New York',
        'dubai-maldives': 'Dubai to Maldives',
        'singapore-bali': 'Singapore to Bali',
        'tokyo-sydney': 'Tokyo to Sydney'
      };
      
      AlertManager.show(`Quick booking started for ${routeNames[route] || 'selected route'}!`, 'success');
      
      // In a real app, you would pre-fill the form with route details
      if (route === 'london-newyork') {
        document.querySelector('.location-from').value = 'London Heathrow (LHR)';
        document.querySelector('.location-to').value = 'New York JFK (JFK)';
      }
    });
  });
  
  // Form submission
  const flightForm = document.getElementById('flightBookingForm');
  if (flightForm) {
    flightForm.addEventListener('submit', function(e) {
      e.preventDefault();
      
      // Basic validation
      const fromInput = this.querySelector('[name="from"], [name="oneway_from"]');
      const toInput = this.querySelector('[name="to"], [name="oneway_to"]');
      const departureInput = this.querySelector('[name="departure"], [name="oneway_departure"]');
      let isValid = true;
      
      [fromInput, toInput, departureInput].forEach(input => {
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
          AlertManager.show('Searching for premium flights... Redirecting to results.', 'success');
          submitBtn.innerHTML = originalText;
          submitBtn.disabled = false;
          
          // In a real app, you would submit the form or redirect to results page
          // For now, we'll simulate a successful search
          setTimeout(() => {
            window.location.href = 'index.php?page=flights_results';
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