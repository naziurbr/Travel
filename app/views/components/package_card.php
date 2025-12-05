<?php
function renderPackageCard($p, $index = 0) {
  // Escape all data
  $img = e($p['hero_image_url'] ?? '');
  $title = e($p['title'] ?? '');
  $price = floatval($p['price'] ?? 0);
  $currency = e($p['currency'] ?? 'USD');
  $durationDays = e($p['duration_days'] ?? '0');
  $durationNights = e($p['duration_nights'] ?? '0');
  $slug = e($p['slug'] ?? '');
  $desc = e($p['short_description'] ?? '');
  $category = e($p['category'] ?? 'luxury');
  $rating = floatval($p['rating'] ?? 4.8);
  $reviews = intval($p['reviews_count'] ?? 42);
  $discount = floatval($p['discount'] ?? 0);
  $isFeatured = boolval($p['is_featured'] ?? false);
  $bestSeller = boolval($p['is_best_seller'] ?? false);
  $hotDeal = boolval($p['is_hot_deal'] ?? false);

  // Format price with currency symbol
  $formattedPrice = $currency === 'USD' ? '$' . number_format($price, 2) : number_format($price, 2) . ' ' . $currency;
  
  // Calculate discounted price if applicable
  $discountedPrice = $discount > 0 ? $price * (1 - ($discount / 100)) : $price;
  $formattedDiscountedPrice = $currency === 'USD' ? '$' . number_format($discountedPrice, 2) : number_format($discountedPrice, 2) . ' ' . $currency;
  
  // Animation delay for staggered loading
  $animationDelay = $index * 0.1;

  // Generate rating stars
  $stars = '';
  $fullStars = floor($rating);
  $halfStar = ($rating - $fullStars) >= 0.5;
  $emptyStars = 5 - $fullStars - ($halfStar ? 1 : 0);
  
  for ($i = 0; $i < $fullStars; $i++) {
    $stars .= '<i class="fas fa-star"></i>';
  }
  if ($halfStar) {
    $stars .= '<i class="fas fa-star-half-alt"></i>';
  }
  for ($i = 0; $i < $emptyStars; $i++) {
    $stars .= '<i class="far fa-star"></i>';
  }

  // Generate badges HTML
  $badgesHTML = '';
  if ($bestSeller) {
    $badgesHTML .= '<span class="badge badge-best-seller"><i class="fas fa-crown"></i> Best Seller</span>';
  }
  if ($hotDeal) {
    $badgesHTML .= '<span class="badge badge-hot-deal"><i class="fas fa-fire"></i> Hot Deal</span>';
  }
  if ($isFeatured) {
    $badgesHTML .= '<span class="badge badge-featured"><i class="fas fa-star"></i> Featured</span>';
  }
  if ($discount > 0) {
    $badgesHTML .= '<span class="badge badge-discount">-' . $discount . '% OFF</span>';
  }

  // Generate original price HTML if there's a discount
  $originalPriceHTML = '';
  if ($discount > 0) {
    $originalPriceHTML = '
      <div class="price-original">
        <span class="original-price">' . $formattedPrice . '</span>
        <span class="discount-percent">-' . $discount . '%</span>
      </div>';
  }

  // Build the HTML
  $html = <<<HTML
<div class="package-card card-grid scroll-animate" 
     data-category="{$category}"
     data-price="{$price}"
     data-rating="{$rating}"
     data-duration="{$durationDays}"
     style="animation-delay: {$animationDelay}s">
  
  <!-- Card Header with Image -->
  <div class="card-header">
    <div class="card-image">
      <img src="{$img}" alt="{$title}" loading="lazy" class="card-img">
      
      <!-- Image Overlay -->
      <div class="card-overlay">
        <!-- Badges -->
        <div class="card-badges">
          {$badgesHTML}
        </div>
        
        <!-- Wishlist Button -->
        <button class="card-wishlist" data-package-slug="{$slug}" type="button">
          <i class="far fa-heart"></i>
        </button>
        
        <!-- Quick View Button -->
        <button class="card-quick-view" data-package-slug="{$slug}" type="button">
          <i class="fas fa-eye"></i>
          Quick View
        </button>
      </div>
    </div>
  </div>
  
  <!-- Card Content -->
  <div class="card-content">
    <!-- Category & Rating -->
    <div class="card-meta">
      <span class="card-category">
        <i class="fas fa-tag"></i>
        {$category}
      </span>
      <span class="card-rating">
        {$stars}
        <span class="rating-number">{$rating}</span>
        <span class="rating-count">({$reviews})</span>
      </span>
    </div>
    
    <!-- Title -->
    <h3 class="card-title">
      <a href="index.php?page=package_show&slug={$slug}" class="card-title-link">{$title}</a>
    </h3>
    
    <!-- Description -->
    <p class="card-description">{$desc}</p>
    
    <!-- Features Icons -->
    <div class="card-features">
      <div class="feature">
        <i class="fas fa-clock"></i>
        <span>{$durationDays} Days</span>
      </div>
      <div class="feature">
        <i class="fas fa-moon"></i>
        <span>{$durationNights} Nights</span>
      </div>
      <div class="feature">
        <i class="fas fa-map-marker-alt"></i>
        <span>Multiple Cities</span>
      </div>
      <div class="feature">
        <i class="fas fa-hotel"></i>
        <span>5-Star Hotels</span>
      </div>
    </div>
    
    <!-- Footer -->
    <div class="card-footer">
      <!-- Price -->
      <div class="card-price">
        {$originalPriceHTML}
        <div class="price-current">
          <span class="price-label">Starting from</span>
          <span class="price-amount">{$formattedDiscountedPrice}</span>
          <span class="price-per">/person</span>
        </div>
      </div>
      
      <!-- Actions -->
      <div class="card-actions">
        <a href="index.php?page=package_show&slug={$slug}" class="btn btn-primary btn-sm">
          <i class="fas fa-eye"></i>
          <span>View Details</span>
        </a>
        <button class="btn btn-outline btn-sm btn-inquire" data-package-slug="{$slug}" type="button">
          <i class="fas fa-envelope"></i>
          <span>Inquire</span>
        </button>
      </div>
    </div>
  </div>
</div>
HTML;

  return $html;
}
?>

<style>
/* Package Card Styles */
.package-card {
  background: white;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: var(--shadow-md);
  transition: all var(--transition-normal);
  position: relative;
  height: 100%;
  display: flex;
  flex-direction: column;
}

.package-card:hover {
  transform: translateY(-10px);
  box-shadow: var(--shadow-lg);
}

/* Card Header */
.card-header {
  position: relative;
  overflow: hidden;
}

.card-image {
  position: relative;
  height: 250px;
  overflow: hidden;
}

.card-img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform var(--transition-normal);
}

.package-card:hover .card-img {
  transform: scale(1.1);
}

.card-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(to bottom, rgba(0,0,0,0.1) 0%, rgba(0,0,0,0.3) 100%);
  opacity: 0;
  transition: opacity var(--transition-normal);
  padding: 20px;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

.package-card:hover .card-overlay {
  opacity: 1;
}

.card-badges {
  display: flex;
  flex-wrap: wrap;
  gap: 8px;
}

.badge {
  padding: 6px 12px;
  border-radius: 20px;
  font-size: 0.75rem;
  font-weight: 600;
  display: inline-flex;
  align-items: center;
  gap: 5px;
  backdrop-filter: blur(10px);
  border: 1px solid rgba(255, 255, 255, 0.2);
}

.badge-best-seller {
  background: rgba(241, 196, 15, 0.9);
  color: #000;
}

.badge-hot-deal {
  background: rgba(231, 76, 60, 0.9);
  color: white;
}

.badge-featured {
  background: rgba(52, 152, 219, 0.9);
  color: white;
}

.badge-discount {
  background: rgba(46, 204, 113, 0.9);
  color: white;
}

.card-wishlist {
  position: absolute;
  top: 20px;
  right: 20px;
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.9);
  border: none;
  color: #666;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: all var(--transition-fast);
  z-index: 2;
}

.card-wishlist:hover {
  background: white;
  color: #e74c3c;
  transform: scale(1.1);
}

.card-wishlist.active {
  background: #e74c3c;
  color: white;
}

.card-quick-view {
  position: absolute;
  bottom: 20px;
  left: 50%;
  transform: translateX(-50%) translateY(20px);
  background: rgba(255, 255, 255, 0.95);
  border: none;
  padding: 12px 24px;
  border-radius: 50px;
  color: var(--midnight-navy);
  font-weight: 600;
  cursor: pointer;
  display: flex;
  align-items: center;
  gap: 8px;
  opacity: 0;
  transition: all var(--transition-normal);
  backdrop-filter: blur(10px);
}

.package-card:hover .card-quick-view {
  opacity: 1;
  transform: translateX(-50%) translateY(0);
}

.card-quick-view:hover {
  background: white;
  color: var(--sunset-gold);
}

/* Card Content */
.card-content {
  padding: 25px;
  flex: 1;
  display: flex;
  flex-direction: column;
}

.card-meta {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 15px;
}

.card-category {
  font-size: 0.85rem;
  color: var(--horizon-cyan);
  font-weight: 600;
  display: flex;
  align-items: center;
  gap: 5px;
  background: rgba(34, 166, 179, 0.1);
  padding: 4px 12px;
  border-radius: 15px;
}

.card-rating {
  display: flex;
  align-items: center;
  gap: 5px;
}

.card-rating i {
  color: var(--sunset-gold);
  font-size: 0.9rem;
}

.rating-number {
  font-weight: 700;
  color: var(--midnight-navy);
}

.rating-count {
  color: rgba(var(--midnight-navy), 0.5);
  font-size: 0.85rem;
}

.card-title {
  margin: 0 0 12px 0;
  font-size: 1.3rem;
  line-height: 1.3;
}

.card-title-link {
  color: var(--midnight-navy);
  text-decoration: none;
  transition: color var(--transition-fast);
}

.card-title-link:hover {
  color: var(--sunset-gold);
}

.card-description {
  color: rgba(var(--midnight-navy), 0.7);
  font-size: 0.95rem;
  line-height: 1.5;
  margin-bottom: 20px;
  flex: 1;
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

/* Card Features */
.card-features {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 12px;
  margin-bottom: 25px;
  padding-bottom: 25px;
  border-bottom: 1px solid var(--glass-border);
}

.feature {
  display: flex;
  align-items: center;
  gap: 8px;
  font-size: 0.85rem;
  color: rgba(var(--midnight-navy), 0.7);
}

.feature i {
  color: var(--horizon-cyan);
  font-size: 0.9rem;
  width: 16px;
  text-align: center;
}

/* Card Footer */
.card-footer {
  margin-top: auto;
}

.card-price {
  margin-bottom: 20px;
}

.price-original {
  display: flex;
  align-items: center;
  gap: 10px;
  margin-bottom: 5px;
}

.original-price {
  text-decoration: line-through;
  color: rgba(var(--midnight-navy), 0.5);
  font-size: 1rem;
}

.discount-percent {
  background: rgba(46, 204, 113, 0.1);
  color: #27ae60;
  padding: 2px 8px;
  border-radius: 4px;
  font-size: 0.8rem;
  font-weight: 600;
}

.price-current {
  display: flex;
  align-items: baseline;
  gap: 8px;
}

.price-label {
  font-size: 0.85rem;
  color: rgba(var(--midnight-navy), 0.6);
}

.price-amount {
  font-size: 1.8rem;
  font-weight: 700;
  color: var(--sunset-gold);
}

.price-per {
  font-size: 0.9rem;
  color: rgba(var(--midnight-navy), 0.6);
}

.card-actions {
  display: flex;
  gap: 10px;
}

.btn-sm {
  padding: 10px 20px;
  font-size: 0.9rem;
  flex: 1;
  justify-content: center;
}

/* List View Style */
.package-card.card-list {
  flex-direction: row;
  min-height: 200px;
}

.package-card.card-list .card-image {
  width: 300px;
  height: 200px;
  flex-shrink: 0;
}

.package-card.card-list .card-content {
  flex: 1;
  display: flex;
  flex-direction: column;
}

.package-card.card-list .card-features {
  grid-template-columns: repeat(4, 1fr);
}

.package-card.card-list .card-footer {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: auto;
}

.package-card.card-list .card-price {
  margin-bottom: 0;
}

.package-card.card-list .card-actions {
  flex: 0 0 auto;
}

/* Responsive */
@media (max-width: 768px) {
  .package-card.card-list {
    flex-direction: column;
  }
  
  .package-card.card-list .card-image {
    width: 100%;
    height: 200px;
  }
  
  .card-features {
    grid-template-columns: 1fr;
  }
  
  .card-actions {
    flex-direction: column;
  }
  
  .btn-sm {
    width: 100%;
  }
}

@media (max-width: 480px) {
  .card-content {
    padding: 20px;
  }
  
  .price-current {
    flex-direction: column;
    align-items: flex-start;
    gap: 2px;
  }
  
  .card-meta {
    flex-direction: column;
    align-items: flex-start;
    gap: 10px;
  }
}
</style>

<script>
// JavaScript for Package Card Interactions
document.addEventListener('DOMContentLoaded', function() {
  // Wishlist functionality
  document.querySelectorAll('.card-wishlist').forEach(button => {
    button.addEventListener('click', function(e) {
      e.preventDefault();
      e.stopPropagation();
      
      const icon = this.querySelector('i');
      const slug = this.dataset.packageSlug;
      
      if (icon.classList.contains('far')) {
        // Add to wishlist
        icon.classList.remove('far');
        icon.classList.add('fas');
        icon.style.color = '#e74c3c';
        this.classList.add('active');
        
        // In a real app, you would make an AJAX request here
        if (typeof AlertManager !== 'undefined') {
          AlertManager.show('Added to wishlist!', 'success');
        }
        
        // Save to localStorage for demo
        let wishlist = JSON.parse(localStorage.getItem('wishlist') || '[]');
        if (!wishlist.includes(slug)) {
          wishlist.push(slug);
          localStorage.setItem('wishlist', JSON.stringify(wishlist));
        }
      } else {
        // Remove from wishlist
        icon.classList.remove('fas');
        icon.classList.add('far');
        icon.style.color = '';
        this.classList.remove('active');
        
        if (typeof AlertManager !== 'undefined') {
          AlertManager.show('Removed from wishlist', 'info');
        }
        
        // Remove from localStorage for demo
        let wishlist = JSON.parse(localStorage.getItem('wishlist') || '[]');
        wishlist = wishlist.filter(item => item !== slug);
        localStorage.setItem('wishlist', JSON.stringify(wishlist));
      }
    });
  });
  
  // Quick View functionality
  document.querySelectorAll('.card-quick-view').forEach(button => {
    button.addEventListener('click', function(e) {
      e.preventDefault();
      e.stopPropagation();
      
      const slug = this.dataset.packageSlug;
      if (typeof AlertManager !== 'undefined') {
        AlertManager.show(`Opening quick view for package: ${slug}`, 'info');
      }
      
      // In a real app, you would show a modal with package details
      // For now, we'll just navigate to the package page
      window.location.href = `index.php?page=package_show&slug=${slug}`;
    });
  });
  
  // Inquire button functionality
  document.querySelectorAll('.btn-inquire').forEach(button => {
    button.addEventListener('click', function(e) {
      e.preventDefault();
      e.stopPropagation();
      
      const slug = this.dataset.packageSlug;
      if (typeof AlertManager !== 'undefined') {
        AlertManager.show(`Inquiry form will open for package: ${slug}`, 'info');
      }
      
      // In a real app, you would show an inquiry modal
      // For now, redirect to contact page with package info
      window.location.href = `index.php?page=contact&package=${slug}`;
    });
  });
  
  // Restore wishlist state from localStorage
  const wishlist = JSON.parse(localStorage.getItem('wishlist') || '[]');
  document.querySelectorAll('.card-wishlist').forEach(button => {
    const slug = button.dataset.packageSlug;
    if (wishlist.includes(slug)) {
      const icon = button.querySelector('i');
      icon.classList.remove('far');
      icon.classList.add('fas');
      icon.style.color = '#e74c3c';
      button.classList.add('active');
    }
  });
});
</script>