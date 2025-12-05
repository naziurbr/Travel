<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
  <meta charset="UTF-8">
  <title><?= e(APP_NAME) ?> - Premium Travel Experiences</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Discover luxury travel packages, premium flights, and exclusive hotel bookings with Travelers of Destination.">
  <meta name="keywords" content="travel, luxury, packages, flights, hotels, visa, premium">
  
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="<?= APP_URL ?>/public/images/favicon.ico">
  <link rel="apple-touch-icon" sizes="180x180" href="<?= APP_URL ?>/public/images/apple-touch-icon.png">
  
  <!-- CSS - FIXED with versioning to prevent cache -->
  <link rel="stylesheet" href="<?= APP_URL ?>/public/css/main.css?v=<?= time() ?>">
  
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Inter:wght@300;400;500;600;700&family=Nunito:wght@300;400;600&display=swap" rel="stylesheet">
  
  <!-- Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  
  <!-- Open Graph Meta Tags -->
  <meta property="og:title" content="<?= e(APP_NAME) ?> - Premium Travel">
  <meta property="og:description" content="Discover luxury travel experiences around the world">
  <meta property="og:image" content="<?= APP_URL ?>/public/images/og-image.jpg">
  <meta property="og:url" content="<?= APP_URL ?>">
  <meta property="og:type" content="website">
  
  <!-- EMERGENCY INLINE CSS to force visibility -->
  <style>
    /* Force everything to be visible */
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body { 
      font-family: 'Inter', sans-serif !important; 
      background: #F9F9F9 !important; 
      color: #333 !important; 
      min-height: 100vh !important;
      overflow-x: hidden !important;
    }
    
    /* Force header to show */
    header.header {
      background: #0A3D62 !important;
      color: white !important;
      padding: 1rem 0 !important;
      position: relative !important;
      top: 0 !important;
      left: 0 !important;
      right: 0 !important;
      z-index: 1000 !important;
    }
    
    /* Force main content spacing */
    main.main-content {
      padding-top: 80px !important;
      min-height: 100vh !important;
    }
    
    /* Make sure container works */
    .container {
      width: 100% !important;
      max-width: 1200px !important;
      margin: 0 auto !important;
      padding: 0 20px !important;
    }
    
    /* Basic navigation */
    .nav {
      display: flex !important;
      justify-content: space-between !important;
      align-items: center !important;
    }
    
    /* Make links visible */
    a {
      color: #22A6B3 !important;
      text-decoration: none !important;
      padding: 8px 12px !important;
      display: inline-block !important;
    }
    
    /* Basic button styling */
    .btn {
      background: #F0A500 !important;
      color: white !important;
      padding: 12px 24px !important;
      border-radius: 8px !important;
      border: none !important;
      text-decoration: none !important;
      display: inline-flex !important;
      align-items: center !important;
      gap: 8px !important;
      font-weight: 600 !important;
    }
  </style>
</head>
<body>
  <!-- Loading Animation -->
  <div id="loading" class="loading-screen" style="display: none;">
    <div class="loading-content">
      <div class="loading-spinner">
        <div class="spinner-circle"></div>
        <div class="spinner-circle"></div>
        <div class="spinner-circle"></div>
      </div>
      <h3>Loading Premium Experience</h3>
      <p>Preparing your journey...</p>
    </div>
  </div>

  <!-- Alert Container -->
  <div class="alert-container" style="position: fixed; top: 100px; right: 20px; z-index: 9999; max-width: 400px;"></div>

  <!-- Premium Header -->
  <header class="header">
    <div class="container">
      <div class="nav">
        <!-- Logo -->
        <a href="index.php?page=home" class="logo">
          <div class="logo-icon">
            <i class="fas fa-globe-americas"></i>
          </div>
          <div class="logo-text">
            <span class="logo-main">Travelers of</span>
            <span class="logo-accent">Destination</span>
          </div>
        </a>

        <!-- Desktop Navigation -->
        <nav class="desktop-nav">
          <ul class="nav-menu">
            <li><a href="index.php?page=home" class="nav-link <?= ($current_page ?? '') === 'home' ? 'active' : '' ?>">
              <i class="fas fa-home nav-icon"></i>
              <span>Home</span>
            </a></li>
            
            <li><a href="index.php?page=packages" class="nav-link <?= ($current_page ?? '') === 'packages' ? 'active' : '' ?>">
              <i class="fas fa-suitcase nav-icon"></i>
              <span>Packages</span>
            </a></li>
            
            <li class="nav-dropdown">
              <a href="#" class="nav-link">
                <i class="fas fa-plane nav-icon"></i>
                <span>Bookings</span>
                <i class="fas fa-chevron-down dropdown-arrow"></i>
              </a>
              <div class="dropdown-menu">
                <a href="index.php?page=flights" class="dropdown-item <?= ($current_page ?? '') === 'flights' ? 'active' : '' ?>">
                  <i class="fas fa-plane-departure"></i>
                  <span>Flights</span>
                </a>
                <a href="index.php?page=hotels" class="dropdown-item <?= ($current_page ?? '') === 'hotels' ? 'active' : '' ?>">
                  <i class="fas fa-hotel"></i>
                  <span>Hotels</span>
                </a>
                <a href="index.php?page=visa" class="dropdown-item <?= ($current_page ?? '') === 'visa' ? 'active' : '' ?>">
                  <i class="fas fa-passport"></i>
                  <span>Visa Services</span>
                </a>
              </div>
            </li>
            
            <li><a href="index.php?page=about" class="nav-link <?= ($current_page ?? '') === 'about' ? 'active' : '' ?>">
              <i class="fas fa-info-circle nav-icon"></i>
              <span>About</span>
            </a></li>
            
            <li><a href="index.php?page=contact" class="nav-link <?= ($current_page ?? '') === 'contact' ? 'active' : '' ?>">
              <i class="fas fa-envelope nav-icon"></i>
              <span>Contact</span>
            </a></li>
          </ul>
        </nav>

        <!-- Action Buttons -->
        <div class="nav-actions">
          <!-- Search Button -->
          <button class="nav-action-btn search-btn" id="searchToggle">
            <i class="fas fa-search"></i>
          </button>
          
          <!-- User Account -->
          <?php if (isset($_SESSION['user_id'])): ?>
            <div class="user-dropdown">
              <button class="nav-action-btn user-btn">
                <i class="fas fa-user-circle"></i>
              </button>
              <div class="dropdown-menu user-menu">
                <div class="user-info">
                  <i class="fas fa-user-circle user-avatar"></i>
                  <div>
                    <strong><?= e($_SESSION['user_name'] ?? 'User') ?></strong>
                    <small><?= e($_SESSION['user_email'] ?? '') ?></small>
                  </div>
                </div>
                <a href="index.php?page=profile" class="dropdown-item">
                  <i class="fas fa-user"></i>
                  <span>My Profile</span>
                </a>
                <a href="index.php?page=bookings" class="dropdown-item">
                  <i class="fas fa-calendar-alt"></i>
                  <span>My Bookings</span>
                </a>
                <?php if ($_SESSION['role'] === 'admin'): ?>
                  <a href="admin/index.php" class="dropdown-item">
                    <i class="fas fa-cog"></i>
                    <span>Admin Panel</span>
                  </a>
                <?php endif; ?>
                <div class="dropdown-divider"></div>
                <a href="index.php?action=logout" class="dropdown-item logout">
                  <i class="fas fa-sign-out-alt"></i>
                  <span>Logout</span>
                </a>
              </div>
            </div>
          <?php else: ?>
            <a href="index.php?page=login" class="btn btn-outline btn-sm login-btn">
              <i class="fas fa-sign-in-alt"></i>
              <span>Login</span>
            </a>
            <a href="index.php?page=register" class="btn btn-primary btn-sm">
              <i class="fas fa-user-plus"></i>
              <span>Register</span>
            </a>
          <?php endif; ?>
          
          <!-- Theme Toggle -->
          <button id="themeToggle" class="theme-toggle nav-action-btn">
            <i class="fas fa-moon"></i>
            <span>Dark Mode</span>
          </button>
          
          <!-- Mobile Menu Toggle -->
          <button class="mobile-menu-btn" id="mobileMenuToggle">
            <i class="fas fa-bars"></i>
          </button>
        </div>
      </div>

      <!-- Search Bar -->
      <div class="search-bar" id="searchBar" style="display: none;">
        <div class="search-container">
          <i class="fas fa-search search-icon"></i>
          <input type="text" class="search-input" placeholder="Search destinations, packages, hotels...">
          <button class="search-close" id="searchClose">
            <i class="fas fa-times"></i>
          </button>
        </div>
        <div class="search-suggestions">
          <div class="suggestion-category">
            <h4>Popular Destinations</h4>
            <a href="#" class="suggestion-item">Bali, Indonesia</a>
            <a href="#" class="suggestion-item">Santorini, Greece</a>
            <a href="#" class="suggestion-item">Maldives</a>
          </div>
          <div class="suggestion-category">
            <h4>Package Types</h4>
            <a href="#" class="suggestion-item">Honeymoon Packages</a>
            <a href="#" class="suggestion-item">Adventure Tours</a>
            <a href="#" class="suggestion-item">Luxury Cruises</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Mobile Navigation Overlay -->
    <div class="mobile-nav-overlay" id="mobileNavOverlay" style="display: none;">
      <div class="mobile-nav-content">
        <div class="mobile-nav-header">
          <a href="index.php?page=home" class="logo">
            <span class="logo-main">Travelers of</span>
            <span class="logo-accent">Destination</span>
          </a>
          <button class="mobile-nav-close" id="mobileNavClose">
            <i class="fas fa-times"></i>
          </button>
        </div>
        
        <ul class="mobile-nav-menu">
          <li><a href="index.php?page=home" class="mobile-nav-link <?= ($current_page ?? '') === 'home' ? 'active' : '' ?>">
            <i class="fas fa-home"></i>
            <span>Home</span>
          </a></li>
          
          <li><a href="index.php?page=packages" class="mobile-nav-link <?= ($current_page ?? '') === 'packages' ? 'active' : '' ?>">
            <i class="fas fa-suitcase"></i>
            <span>Holiday Packages</span>
          </a></li>
          
          <li><a href="index.php?page=flights" class="mobile-nav-link <?= ($current_page ?? '') === 'flights' ? 'active' : '' ?>">
            <i class="fas fa-plane-departure"></i>
            <span>Flights</span>
          </a></li>
          
          <li><a href="index.php?page=hotels" class="mobile-nav-link <?= ($current_page ?? '') === 'hotels' ? 'active' : '' ?>">
            <i class="fas fa-hotel"></i>
            <span>Hotels</span>
          </a></li>
          
          <li><a href="index.php?page=visa" class="mobile-nav-link <?= ($current_page ?? '') === 'visa' ? 'active' : '' ?>">
            <i class="fas fa-passport"></i>
            <span>Visa Services</span>
          </a></li>
          
          <li><a href="index.php?page=about" class="mobile-nav-link <?= ($current_page ?? '') === 'about' ? 'active' : '' ?>">
            <i class="fas fa-info-circle"></i>
            <span>About Us</span>
          </a></li>
          
          <li><a href="index.php?page=contact" class="mobile-nav-link <?= ($current_page ?? '') === 'contact' ? 'active' : '' ?>">
            <i class="fas fa-envelope"></i>
            <span>Contact</span>
          </a></li>
        </ul>
        
        <div class="mobile-nav-footer">
          <?php if (isset($_SESSION['user_id'])): ?>
            <div class="mobile-user-info">
              <i class="fas fa-user-circle"></i>
              <div>
                <strong><?= e($_SESSION['user_name'] ?? 'User') ?></strong>
                <small>View Profile</small>
              </div>
            </div>
            <a href="index.php?action=logout" class="btn btn-outline btn-block">
              <i class="fas fa-sign-out-alt"></i>
              <span>Logout</span>
            </a>
          <?php else: ?>
            <div class="mobile-auth-buttons">
              <a href="index.php?page=login" class="btn btn-outline btn-block">
                <i class="fas fa-sign-in-alt"></i>
                <span>Login</span>
              </a>
              <a href="index.php?page=register" class="btn btn-primary btn-block">
                <i class="fas fa-user-plus"></i>
                <span>Register</span>
              </a>
            </div>
          <?php endif; ?>
          
          <div class="mobile-theme-toggle">
            <button id="mobileThemeToggle" class="theme-toggle">
              <i class="fas fa-moon"></i>
              <span>Switch to Dark Mode</span>
            </button>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main class="main-content">