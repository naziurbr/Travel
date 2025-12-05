<!-- Packages Hero -->
<section class="packages-hero">
  <div class="container">
    <div class="hero-content scroll-animate">
      <h1 class="hero-title">Luxury Holiday Packages</h1>
      <p class="hero-subtitle">
        Discover our curated collection of premium travel experiences,<br>
        designed for the discerning traveler seeking extraordinary journeys.
      </p>
      
      <!-- Hero Search -->
      <div class="package-search scroll-animate" style="animation-delay: 0.2s">
        <div class="search-box">
          <i class="fas fa-search search-icon"></i>
          <input type="text" id="packageSearch" placeholder="Search destinations, activities, or keywords..." class="search-input">
          <button class="search-btn" id="searchButton">
            <i class="fas fa-search"></i>
            <span>Search</span>
          </button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Hero Background Pattern -->
  <div class="hero-pattern">
    <div class="pattern-circle pattern-1"></div>
    <div class="pattern-circle pattern-2"></div>
    <div class="pattern-circle pattern-3"></div>
  </div>
</section>

<!-- Packages Main Content -->
<section class="section packages-main">
  <div class="container">
    <div class="packages-layout">
      <!-- Filters Sidebar -->
      <aside class="packages-sidebar scroll-animate">
        <div class="sidebar-widget filter-widget">
          <h3 class="widget-title">
            <i class="fas fa-filter"></i>
            Filter Packages
          </h3>
          
          <!-- Price Range -->
          <div class="filter-group">
            <h4 class="filter-title">Price Range</h4>
            <div class="price-range">
              <div class="range-values">
                <span class="range-min">$500</span>
                <span class="range-max">$10,000</span>
              </div>
              <input type="range" min="500" max="10000" value="5000" class="range-slider" id="priceRange">
              <div class="range-selected">
                Selected: <span id="selectedPrice">$5,000</span>
              </div>
            </div>
          </div>
          
          <!-- Duration -->
          <div class="filter-group">
            <h4 class="filter-title">Duration</h4>
            <div class="duration-filter">
              <label class="filter-option">
                <input type="checkbox" name="duration" value="short" checked>
                <span class="checkmark"></span>
                <span class="option-text">Short (3-5 days)</span>
              </label>
              <label class="filter-option">
                <input type="checkbox" name="duration" value="medium" checked>
                <span class="checkmark"></span>
                <span class="option-text">Medium (6-10 days)</span>
              </label>
              <label class="filter-option">
                <input type="checkbox" name="duration" value="long">
                <span class="checkmark"></span>
                <span class="option-text">Long (11+ days)</span>
              </label>
            </div>
          </div>
          
          <!-- Categories -->
          <div class="filter-group">
            <h4 class="filter-title">Categories</h4>
            <div class="category-filter">
              <label class="filter-option">
                <input type="checkbox" name="category" value="luxury" checked>
                <span class="checkmark"></span>
                <span class="option-text">Luxury</span>
                <span class="option-count">12</span>
              </label>
              <label class="filter-option">
                <input type="checkbox" name="category" value="adventure" checked>
                <span class="checkmark"></span>
                <span class="option-text">Adventure</span>
                <span class="option-count">8</span>
              </label>
              <label class="filter-option">
                <input type="checkbox" name="category" value="beach">
                <span class="checkmark"></span>
                <span class="option-text">Beach</span>
                <span class="option-count">15</span>
              </label>
              <label class="filter-option">
                <input type="checkbox" name="category" value="cultural">
                <span class="checkmark"></span>
                <span class="option-text">Cultural</span>
                <span class="option-count">10</span>
              </label>
              <label class="filter-option">
                <input type="checkbox" name="category" value="honeymoon">
                <span class="checkmark"></span>
                <span class="option-text">Honeymoon</span>
                <span class="option-count">7</span>
              </label>
              <label class="filter-option">
                <input type="checkbox" name="category" value="family">
                <span class="checkmark"></span>
                <span class="option-text">Family</span>
                <span class="option-count">9</span>
              </label>
            </div>
          </div>
          
          <!-- Destinations -->
          <div class="filter-group">
            <h4 class="filter-title">Destinations</h4>
            <div class="destination-filter">
              <label class="filter-option">
                <input type="checkbox" name="destination" value="europe">
                <span class="checkmark"></span>
                <span class="option-text">Europe</span>
                <span class="option-count">18</span>
              </label>
              <label class="filter-option">
                <input type="checkbox" name="destination" value="asia">
                <span class="checkmark"></span>
                <span class="option-text">Asia</span>
                <span class="option-count">22</span>
              </label>
              <label class="filter-option">
                <input type="checkbox" name="destination" value="africa">
                <span class="checkmark"></span>
                <span class="option-text">Africa</span>
                <span class="option-count">6</span>
              </label>
              <label class="filter-option">
                <input type="checkbox" name="destination" value="americas">
                <span class="checkmark"></span>
                <span class="option-text">Americas</span>
                <span class="option-count">14</span>
              </label>
              <label class="filter-option">
                <input type="checkbox" name="destination" value="oceania">
                <span class="checkmark"></span>
                <span class="option-text">Oceania</span>
                <span class="option-count">9</span>
              </label>
            </div>
          </div>
          
          <!-- Rating -->
          <div class="filter-group">
            <h4 class="filter-title">Minimum Rating</h4>
            <div class="rating-filter">
              <div class="star-rating">
                <?php for ($i = 5; $i >= 1; $i--): ?>
                  <label class="star-option">
                    <input type="radio" name="rating" value="<?= $i ?>" <?= $i === 4 ? 'checked' : '' ?>>
                    <div class="stars">
                      <?php for ($j = 1; $j <= 5; $j++): ?>
                        <i class="fas fa-star <?= $j <= $i ? 'active' : '' ?>"></i>
                      <?php endfor; ?>
                    </div>
                    <span class="rating-text"><?= $i ?>.0 & above</span>
                  </label>
                <?php endfor; ?>
              </div>
            </div>
          </div>
          
          <!-- Filter Actions -->
          <div class="filter-actions">
            <button class="btn btn-primary btn-block" id="applyFilters">
              <i class="fas fa-check"></i>
              Apply Filters
            </button>
            <button class="btn btn-outline btn-block" id="resetFilters">
              <i class="fas fa-redo"></i>
              Reset All
            </button>
          </div>
        </div>
        
        <!-- Featured Package -->
        <div class="sidebar-widget featured-widget scroll-animate" style="animation-delay: 0.1s">
          <h3 class="widget-title">
            <i class="fas fa-crown"></i>
            Featured Package
          </h3>
          <div class="featured-package">
            <div class="featured-image">
              <img src="<?= APP_URL ?>/public/images/featured-package.jpg" alt="Luxury Maldives Escape">
              <div class="featured-badge">Most Popular</div>
            </div>
            <div class="featured-content">
              <h4>Luxury Maldives Escape</h4>
              <div class="featured-meta">
                <span><i class="fas fa-calendar-alt"></i> 7 Days</span>
                <span><i class="fas fa-map-marker-alt"></i> Maldives</span>
              </div>
              <div class="featured-price">
                <span class="price-old">$4,999</span>
                <span class="price-new">$3,999</span>
                <span class="price-save">Save 20%</span>
              </div>
              <a href="index.php?page=package_show&id=1" class="btn btn-primary btn-block">
                <i class="fas fa-eye"></i>
                View Details
              </a>
            </div>
          </div>
        </div>
      </aside>
      
      <!-- Packages Grid -->
      <main class="packages-content">
        <!-- Header -->
        <div class="packages-header scroll-animate">
          <div class="results-info">
            <h2>Premium Travel Packages</h2>
            <p class="results-count">Showing <span id="packageCount"><?= count($packages) ?></span> packages</p>
          </div>
          
          <div class="sort-options">
            <select class="sort-select" id="sortPackages">
              <option value="featured">Featured First</option>
              <option value="price-low">Price: Low to High</option>
              <option value="price-high">Price: High to Low</option>
              <option value="rating">Highest Rated</option>
              <option value="duration">Shortest Duration</option>
              <option value="popular">Most Popular</option>
            </select>
            
            <div class="view-toggle">
              <button class="view-btn active" data-view="grid">
                <i class="fas fa-th"></i>
              </button>
              <button class="view-btn" data-view="list">
                <i class="fas fa-list"></i>
              </button>
            </div>
          </div>
        </div>
        
        <!-- Packages Grid/List -->
        <div class="packages-container view-grid" id="packagesContainer">
          <?php
          include __DIR__ . '/../components/package_card.php';
          foreach ($packages as $index => $p) {
            echo renderPackageCard($p, $index);
          }
          ?>
        </div>
        
        <!-- No Results Message -->
        <div class="no-results" id="noResults" style="display: none;">
          <div class="no-results-content">
            <i class="fas fa-search fa-3x"></i>
            <h3>No Packages Found</h3>
            <p>Try adjusting your filters or search terms to find what you're looking for.</p>
            <button class="btn btn-primary" id="clearAllFilters">
              <i class="fas fa-redo"></i>
              Clear All Filters
            </button>
          </div>
        </div>
        
        <!-- Pagination -->
        <?php if (isset($totalPages) && $totalPages > 1): ?>
          <div class="pagination scroll-animate">
            <nav class="pagination-nav">
              <?php if (isset($currentPage) && $currentPage > 1): ?>
                <a href="index.php?page=packages&p=<?= $currentPage - 1 ?>" class="pagination-item pagination-prev">
                  <i class="fas fa-chevron-left"></i>
                  Previous
                </a>
              <?php endif; ?>
              
              <div class="pagination-numbers">
                <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                  <?php if ($i == 1 || $i == $totalPages || ($i >= $currentPage - 2 && $i <= $currentPage + 2)): ?>
                    <a href="index.php?page=packages&p=<?= $i ?>" 
                       class="pagination-item <?= $i == ($currentPage ?? 1) ? 'active' : '' ?>">
                      <?= $i ?>
                    </a>
                  <?php elseif ($i == $currentPage - 3 || $i == $currentPage + 3): ?>
                    <span class="pagination-ellipsis">...</span>
                  <?php endif; ?>
                <?php endfor; ?>
              </div>
              
              <?php if (isset($currentPage) && $currentPage < $totalPages): ?>
                <a href="index.php?page=packages&p=<?= $currentPage + 1 ?>" class="pagination-item pagination-next">
                  Next
                  <i class="fas fa-chevron-right"></i>
                </a>
              <?php endif; ?>
            </nav>
          </div>
        <?php endif; ?>
      </main>
    </div>
  </div>
</section>

<!-- Newsletter Section -->
<section class="section newsletter-section">
  <div class="container">
    <div class="newsletter-content scroll-animate">
      <div class="newsletter-text">
        <h2>Never Miss a Deal</h2>
        <p>Subscribe to our newsletter and be the first to know about exclusive offers, new destinations, and insider travel tips.</p>
      </div>
      <form class="newsletter-form" id="packagesNewsletter">
        <div class="input-group">
          <input type="email" placeholder="Enter your email address" required>
          <button type="submit" class="btn btn-primary">
            <i class="fas fa-paper-plane"></i>
            Subscribe
          </button>
        </div>
        <div class="form-agreement">
          <label class="checkbox-label">
            <input type="checkbox" required>
            <span class="checkmark"></span>
            <span>I agree to receive travel updates and special offers</span>
          </label>
        </div>
      </form>
    </div>
  </div>
</section>

<!-- JavaScript for Packages Page -->
<script>
document.addEventListener('DOMContentLoaded', function() {
  // Price Range Slider
  const priceRange = document.getElementById('priceRange');
  const selectedPrice = document.getElementById('selectedPrice');
  
  if (priceRange && selectedPrice) {
    const formatPrice = (price) => '$' + price.toLocaleString();
    
    priceRange.addEventListener('input', function() {
      selectedPrice.textContent = formatPrice(parseInt(this.value));
    });
    
    // Initialize display
    selectedPrice.textContent = formatPrice(parseInt(priceRange.value));
  }
  
  // Package Search
  const packageSearch = document.getElementById('packageSearch');
  const searchButton = document.getElementById('searchButton');
  const packageCards = document.querySelectorAll('.package-card');
  
  function performSearch() {
    const searchTerm = packageSearch.value.toLowerCase().trim();
    let visibleCount = 0;
    
    packageCards.forEach(card => {
      const cardText = card.textContent.toLowerCase();
      if (searchTerm === '' || cardText.includes(searchTerm)) {
        card.style.display = 'block';
        visibleCount++;
      } else {
        card.style.display = 'none';
      }
    });
    
    // Update results count
    document.getElementById('packageCount').textContent = visibleCount;
    
    // Show/hide no results message
    const noResults = document.getElementById('noResults');
    noResults.style.display = visibleCount === 0 ? 'block' : 'none';
  }
  
  if (packageSearch && searchButton) {
    searchButton.addEventListener('click', performSearch);
    packageSearch.addEventListener('keyup', function(e) {
      if (e.key === 'Enter') performSearch();
    });
  }
  
  // Filter Application
  const applyFiltersBtn = document.getElementById('applyFilters');
  const resetFiltersBtn = document.getElementById('resetFilters');
  const clearAllFiltersBtn = document.getElementById('clearAllFilters');
  
  if (applyFiltersBtn) {
    applyFiltersBtn.addEventListener('click', function() {
      AlertManager.show('Filters applied successfully!', 'success');
      
      // In a real app, this would filter packages based on selected criteria
      // For now, we'll just show a message
      setTimeout(() => {
        document.getElementById('packageCount').textContent = '12';
      }, 500);
    });
  }
  
  if (resetFiltersBtn) {
    resetFiltersBtn.addEventListener('click', function() {
      // Reset all checkboxes
      document.querySelectorAll('input[type="checkbox"]').forEach(cb => {
        cb.checked = false;
      });
      
      // Reset checkboxes that should be checked by default
      document.querySelectorAll('input[name="duration"][value="short"], input[name="duration"][value="medium"], input[name="category"][value="luxury"], input[name="category"][value="adventure"]').forEach(cb => {
        cb.checked = true;
      });
      
      // Reset rating
      document.querySelector('input[name="rating"][value="4"]').checked = true;
      
      // Reset price range
      if (priceRange) {
        priceRange.value = 5000;
        selectedPrice.textContent = '$5,000';
      }
      
      AlertManager.show('Filters reset successfully!', 'info');
    });
  }
  
  if (clearAllFiltersBtn) {
    clearAllFiltersBtn.addEventListener('click', function() {
      resetFiltersBtn.click();
      packageSearch.value = '';
      performSearch();
    });
  }
  
  // Sort Packages
  const sortSelect = document.getElementById('sortPackages');
  if (sortSelect) {
    sortSelect.addEventListener('change', function() {
      AlertManager.show(`Sorted by: ${this.options[this.selectedIndex].text}`, 'info');
    });
  }
  
  // View Toggle
  const viewButtons = document.querySelectorAll('.view-btn');
  const packagesContainer = document.getElementById('packagesContainer');
  
  viewButtons.forEach(btn => {
    btn.addEventListener('click', function() {
      const viewType = this.dataset.view;
      
      // Update active button
      viewButtons.forEach(b => b.classList.remove('active'));
      this.classList.add('active');
      
      // Update container class
      packagesContainer.className = 'packages-container';
      packagesContainer.classList.add(`view-${viewType}`);
      
      // Update package cards
      document.querySelectorAll('.package-card').forEach(card => {
        card.classList.remove('card-grid', 'card-list');
        card.classList.add(`card-${viewType}`);
      });
    });
  });
  
  // Newsletter Form
  const newsletterForm = document.getElementById('packagesNewsletter');
  if (newsletterForm) {
    newsletterForm.addEventListener('submit', function(e) {
      e.preventDefault();
      AlertManager.show('Successfully subscribed to newsletter!', 'success');
      this.reset();
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

<!-- CSS for Packages Page -->
<style>
/* Packages Hero */
.packages-hero {
  background: linear-gradient(135deg, var(--deep-ocean-blue), var(--midnight-navy));
  color: white;
  padding: 120px 0 80px;
  position: relative;
  overflow: hidden;
}

.packages-hero .hero-content {
  text-align: center;
  max-width: 800px;
  margin: 0 auto;
}

.packages-hero .hero-title {
  font-size: 3.5rem;
  margin-bottom: 20px;
  color: white;
  background: none;
}

.packages-hero .hero-subtitle {
  font-size: 1.2rem;
  opacity: 0.9;
  margin-bottom: 40px;
  line-height: 1.6;
}

.package-search {
  max-width: 700px;
  margin: 0 auto;
}

.search-box {
  display: flex;
  background: white;
  border-radius: 50px;
  padding: 5px;
  box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
}

.search-icon {
  padding: 0 20px;
  color: var(--horizon-cyan);
  font-size: 1.2rem;
  display: flex;
  align-items: center;
}

.search-input {
  flex: 1;
  border: none;
  padding: 20px 10px;
  font-size: 1.1rem;
  outline: none;
  background: transparent;
}

.search-btn {
  background: linear-gradient(135deg, var(--sunset-gold), var(--horizon-cyan));
  color: white;
  border: none;
  border-radius: 50px;
  padding: 15px 30px;
  font-weight: 600;
  cursor: pointer;
  display: flex;
  align-items: center;
  gap: 10px;
  transition: all var(--transition-normal);
}

.search-btn:hover {
  transform: scale(1.05);
  box-shadow: var(--glow-gold);
}

.hero-pattern {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  overflow: hidden;
  z-index: 1;
}

.pattern-circle {
  position: absolute;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.05);
}

.pattern-1 {
  width: 300px;
  height: 300px;
  top: -150px;
  right: -150px;
}

.pattern-2 {
  width: 200px;
  height: 200px;
  bottom: 100px;
  left: -100px;
}

.pattern-3 {
  width: 150px;
  height: 150px;
  bottom: -75px;
  right: 20%;
}

/* Packages Layout */
.packages-layout {
  display: grid;
  grid-template-columns: 300px 1fr;
  gap: 40px;
}

/* Sidebar */
.packages-sidebar {
  position: sticky;
  top: 120px;
  height: fit-content;
}

.sidebar-widget {
  background: white;
  border-radius: 20px;
  padding: 30px;
  margin-bottom: 30px;
  box-shadow: var(--shadow-md);
}

.widget-title {
  display: flex;
  align-items: center;
  gap: 10px;
  color: var(--deep-ocean-blue);
  margin-bottom: 25px;
  font-size: 1.2rem;
}

.widget-title i {
  color: var(--sunset-gold);
}

.filter-group {
  margin-bottom: 25px;
  padding-bottom: 25px;
  border-bottom: 1px solid var(--glass-border);
}

.filter-group:last-child {
  border-bottom: none;
  margin-bottom: 0;
  padding-bottom: 0;
}

.filter-title {
  font-size: 1rem;
  margin-bottom: 15px;
  color: var(--midnight-navy);
  font-weight: 600;
}

/* Price Range */
.price-range {
  padding: 10px 0;
}

.range-values {
  display: flex;
  justify-content: space-between;
  margin-bottom: 10px;
  font-size: 0.9rem;
  color: rgba(var(--midnight-navy), 0.7);
}

.range-slider {
  width: 100%;
  height: 4px;
  background: var(--glass-border);
  border-radius: 2px;
  outline: none;
  -webkit-appearance: none;
}

.range-slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  width: 20px;
  height: 20px;
  background: var(--sunset-gold);
  border-radius: 50%;
  cursor: pointer;
  box-shadow: 0 2px 6px rgba(0,0,0,0.2);
}

.range-selected {
  margin-top: 10px;
  font-size: 0.9rem;
  color: rgba(var(--midnight-navy), 0.7);
}

#selectedPrice {
  font-weight: 700;
  color: var(--sunset-gold);
}

/* Filter Options */
.filter-option {
  display: flex;
  align-items: center;
  padding: 8px 0;
  cursor: pointer;
  position: relative;
}

.filter-option input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

.checkmark {
  position: relative;
  height: 20px;
  width: 20px;
  background: var(--glass-bg);
  border: 2px solid var(--glass-border);
  border-radius: 4px;
  margin-right: 10px;
  transition: all var(--transition-fast);
}

.filter-option input:checked ~ .checkmark {
  background: var(--horizon-cyan);
  border-color: var(--horizon-cyan);
}

.checkmark:after {
  content: "";
  position: absolute;
  display: none;
  left: 6px;
  top: 2px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 2px 2px 0;
  transform: rotate(45deg);
}

.filter-option input:checked ~ .checkmark:after {
  display: block;
}

.option-text {
  flex: 1;
  color: rgba(var(--midnight-navy), 0.8);
  font-size: 0.95rem;
}

.option-count {
  color: rgba(var(--midnight-navy), 0.5);
  font-size: 0.85rem;
}

/* Star Rating Filter */
.star-rating {
  display: flex;
  flex-direction: column;
  gap: 10px;
}

.star-option {
  display: flex;
  align-items: center;
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
  font-size: 0.9rem;
  color: rgba(var(--midnight-navy), 0.8);
}

/* Filter Actions */
.filter-actions {
  display: flex;
  flex-direction: column;
  gap: 10px;
  margin-top: 20px;
}

.btn-block {
  width: 100%;
  justify-content: center;
}

/* Featured Package */
.featured-package {
  border: 2px solid var(--sunset-gold);
  border-radius: 15px;
  overflow: hidden;
}

.featured-image {
  position: relative;
  height: 180px;
  overflow: hidden;
}

.featured-image img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.featured-badge {
  position: absolute;
  top: 15px;
  right: 15px;
  background: var(--sunset-gold);
  color: white;
  padding: 5px 10px;
  border-radius: 4px;
  font-size: 0.8rem;
  font-weight: 600;
}

.featured-content {
  padding: 20px;
}

.featured-content h4 {
  margin-bottom: 10px;
  color: var(--deep-ocean-blue);
}

.featured-meta {
  display: flex;
  gap: 15px;
  margin-bottom: 15px;
  font-size: 0.9rem;
  color: rgba(var(--midnight-navy), 0.7);
}

.featured-meta i {
  color: var(--horizon-cyan);
  margin-right: 5px;
}

.featured-price {
  margin-bottom: 15px;
}

.price-old {
  text-decoration: line-through;
  color: rgba(var(--midnight-navy), 0.5);
  margin-right: 10px;
}

.price-new {
  font-size: 1.5rem;
  font-weight: 700;
  color: var(--sunset-gold);
  margin-right: 10px;
}

.price-save {
  background: rgba(34, 166, 179, 0.1);
  color: var(--horizon-cyan);
  padding: 3px 8px;
  border-radius: 4px;
  font-size: 0.8rem;
  font-weight: 600;
}

/* Packages Content */
.packages-content {
  min-height: 800px;
}

.packages-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 40px;
  flex-wrap: wrap;
  gap: 20px;
}

.results-info h2 {
  margin-bottom: 5px;
  color: var(--deep-ocean-blue);
}

.results-count {
  color: rgba(var(--midnight-navy), 0.7);
  font-size: 1rem;
}

.sort-options {
  display: flex;
  align-items: center;
  gap: 20px;
}

.sort-select {
  padding: 12px 20px;
  border: 2px solid var(--glass-border);
  border-radius: 8px;
  background: white;
  color: var(--midnight-navy);
  font-size: 1rem;
  cursor: pointer;
  min-width: 200px;
}

.view-toggle {
  display: flex;
  background: var(--glass-bg);
  border: 1px solid var(--glass-border);
  border-radius: 8px;
  padding: 5px;
}

.view-btn {
  width: 40px;
  height: 40px;
  border: none;
  background: transparent;
  color: var(--midnight-navy);
  border-radius: 6px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all var(--transition-fast);
}

.view-btn.active {
  background: var(--horizon-cyan);
  color: white;
}

.view-btn:hover:not(.active) {
  background: rgba(34, 166, 179, 0.1);
}

/* Packages Container */
.packages-container {
  transition: all var(--transition-normal);
}

.view-grid {
  display: grid;
  grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
  gap: 30px;
}

.view-list {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.view-list .package-card {
  display: flex;
  min-height: 200px;
}

.view-list .package-card .card-image {
  width: 300px;
  height: 200px;
  flex-shrink: 0;
}

.view-list .package-card .card-content {
  flex: 1;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.view-list .package-card .card-footer {
  margin-top: auto;
}

/* No Results */
.no-results {
  text-align: center;
  padding: 80px 20px;
}

.no-results-content i {
  color: var(--glass-border);
  margin-bottom: 20px;
}

.no-results-content h3 {
  color: var(--midnight-navy);
  margin-bottom: 10px;
}

.no-results-content p {
  color: rgba(var(--midnight-navy), 0.7);
  max-width: 500px;
  margin: 0 auto 30px;
}

/* Pagination */
.pagination {
  margin-top: 60px;
}

.pagination-nav {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 10px;
  flex-wrap: wrap;
}

.pagination-item {
  padding: 12px 20px;
  background: white;
  border: 1px solid var(--glass-border);
  border-radius: 8px;
  color: var(--midnight-navy);
  text-decoration: none;
  display: flex;
  align-items: center;
  gap: 8px;
  transition: all var(--transition-fast);
  font-weight: 500;
}

.pagination-item:hover {
  background: var(--horizon-cyan);
  color: white;
  border-color: var(--horizon-cyan);
}

.pagination-item.active {
  background: var(--sunset-gold);
  color: white;
  border-color: var(--sunset-gold);
}

.pagination-numbers {
  display: flex;
  gap: 5px;
}

.pagination-ellipsis {
  padding: 12px;
  color: rgba(var(--midnight-navy), 0.5);
}

/* Newsletter Section */
.newsletter-section {
  background: linear-gradient(135deg, #f8f9ff 0%, #eef2ff 100%);
}

.newsletter-content {
  background: white;
  border-radius: 30px;
  padding: 60px;
  text-align: center;
  box-shadow: var(--shadow-lg);
}

.newsletter-text h2 {
  color: var(--deep-ocean-blue);
  margin-bottom: 15px;
}

.newsletter-text p {
  max-width: 600px;
  margin: 0 auto 40px;
  color: rgba(var(--midnight-navy), 0.7);
}

.newsletter-form .input-group {
  max-width: 500px;
  margin: 0 auto 20px;
  display: flex;
  gap: 10px;
}

.newsletter-form input {
  flex: 1;
  padding: 18px 25px;
  border: 2px solid var(--glass-border);
  border-radius: 50px;
  font-size: 1rem;
}

.newsletter-form .btn {
  border-radius: 50px;
  padding: 18px 40px;
}

.form-agreement {
  text-align: left;
  max-width: 500px;
  margin: 0 auto;
}

.checkbox-label {
  display: flex;
  align-items: flex-start;
  cursor: pointer;
  font-size: 0.9rem;
  color: rgba(var(--midnight-navy), 0.7);
}

.checkbox-label input {
  position: absolute;
  opacity: 0;
}

.checkbox-label .checkmark {
  margin-top: 2px;
}

/* Responsive */
@media (max-width: 1200px) {
  .packages-layout {
    grid-template-columns: 1fr;
  }
  
  .packages-sidebar {
    position: static;
  }
  
  .view-grid {
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
  }
}

@media (max-width: 768px) {
  .packages-hero .hero-title {
    font-size: 2.5rem;
  }
  
  .search-box {
    flex-direction: column;
    border-radius: 20px;
    padding: 20px;
  }
  
  .search-icon {
    display: none;
  }
  
  .search-input {
    padding: 15px;
    margin-bottom: 15px;
    border-bottom: 2px solid var(--glass-border);
    border-radius: 0;
  }
  
  .packages-header {
    flex-direction: column;
    align-items: stretch;
  }
  
  .sort-options {
    flex-direction: column;
    align-items: stretch;
  }
  
  .sort-select {
    width: 100%;
  }
  
  .view-list .package-card {
    flex-direction: column;
  }
  
  .view-list .package-card .card-image {
    width: 100%;
    height: 200px;
  }
  
  .newsletter-content {
    padding: 40px 20px;
  }
  
  .newsletter-form .input-group {
    flex-direction: column;
  }
}

@media (max-width: 480px) {
  .packages-hero {
    padding: 100px 0 60px;
  }
  
  .packages-hero .hero-title {
    font-size: 2rem;
  }
  
  .view-grid {
    grid-template-columns: 1fr;
  }
  
  .pagination-nav {
    flex-direction: column;
    align-items: stretch;
  }
  
  .pagination-numbers {
    order: 1;
    justify-content: center;
  }
  
  .pagination-prev {
    order: 2;
    justify-content: center;
  }
  
  .pagination-next {
    order: 3;
    justify-content: center;
  }
}
</style>