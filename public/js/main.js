// Theme Management System
class ThemeManager {
  constructor() {
    this.toggleBtn = document.getElementById('themeToggle');
    this.html = document.documentElement;
    this.init();
  }

  init() {
    if (this.toggleBtn) {
      this.toggleBtn.addEventListener('click', () => this.toggle());
      this.loadTheme();
    }
  }

  toggle() {
    const isDark = this.html.getAttribute('data-theme') === 'dark';
    const newTheme = isDark ? 'light' : 'dark';
    
    // Smooth transition
    this.html.style.transition = 'background-color 0.5s ease, color 0.5s ease';
    this.html.setAttribute('data-theme', newTheme);
    localStorage.setItem('theme', newTheme);
    
    // Update button text
    this.updateButtonText(newTheme);
    
    // Dispatch custom event
    document.dispatchEvent(new CustomEvent('themeChange', { detail: { theme: newTheme } }));
    
    // Reset transition after animation
    setTimeout(() => {
      this.html.style.transition = '';
    }, 500);
  }

  loadTheme() {
    const saved = localStorage.getItem('theme');
    const prefersDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
    
    if (saved) {
      this.html.setAttribute('data-theme', saved);
    } else if (prefersDark) {
      this.html.setAttribute('data-theme', 'dark');
      localStorage.setItem('theme', 'dark');
    }
    
    this.updateButtonText(this.html.getAttribute('data-theme'));
  }

  updateButtonText(theme) {
    if (this.toggleBtn) {
      const icon = theme === 'dark' ? '☀️' : '🌙';
      const text = theme === 'dark' ? 'Light Mode' : 'Dark Mode';
      this.toggleBtn.innerHTML = `${icon} ${text}`;
    }
  }
}

// Scroll Animation System
class ScrollAnimator {
  constructor() {
    this.observer = null;
    this.init();
  }

  init() {
    const options = {
      root: null,
      rootMargin: '0px',
      threshold: 0.1
    };

    this.observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          
          // Staggered animation for child elements
          if (entry.target.dataset.stagger) {
            const children = entry.target.querySelectorAll('.stagger-item');
            children.forEach((child, index) => {
              setTimeout(() => {
                child.classList.add('visible');
              }, index * 100);
            });
          }
        }
      });
    }, options);

    // Observe all elements with scroll-animate class
    document.querySelectorAll('.scroll-animate').forEach(el => {
      this.observer.observe(el);
    });

    // Header scroll effect
    this.initHeaderScroll();
  }

  initHeaderScroll() {
    const header = document.querySelector('header');
    if (!header) return;

    let lastScroll = 0;
    window.addEventListener('scroll', () => {
      const currentScroll = window.pageYOffset;
      
      // Add scrolled class for background change
      if (currentScroll > 100) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
      
      // Hide/show on scroll direction
      if (currentScroll > lastScroll && currentScroll > 100) {
        header.style.transform = 'translateY(-100%)';
      } else {
        header.style.transform = 'translateY(0)';
      }
      
      lastScroll = currentScroll;
    });
  }
}

// Parallax Effect
class ParallaxController {
  constructor() {
    this.init();
  }

  init() {
    const parallaxElements = document.querySelectorAll('[data-parallax]');
    
    window.addEventListener('scroll', () => {
      const scrolled = window.pageYOffset;
      
      parallaxElements.forEach(element => {
        const rate = element.dataset.parallaxRate || 0.5;
        const offset = scrolled * rate;
        
        if (element.dataset.parallax === 'vertical') {
          element.style.transform = `translateY(${offset}px)`;
        } else if (element.dataset.parallax === 'horizontal') {
          element.style.transform = `translateX(${offset}px)`;
        }
      });
    });
  }
}

// Carousel System
class Carousel {
  constructor(container) {
    this.container = container;
    this.track = container.querySelector('.carousel-track');
    this.items = Array.from(this.track.children);
    this.dots = container.querySelectorAll('.carousel-dot');
    this.prevBtn = container.querySelector('.carousel-prev');
    this.nextBtn = container.querySelector('.carousel-next');
    this.currentIndex = 0;
    this.autoPlayInterval = null;
    
    this.init();
  }

  init() {
    // Set initial positions
    this.items.forEach((item, index) => {
      item.style.transform = `translateX(${index * 100}%)`;
    });

    // Navigation dots
    this.dots.forEach((dot, index) => {
      dot.addEventListener('click', () => this.goToSlide(index));
    });

    // Next/Prev buttons
    if (this.prevBtn) {
      this.prevBtn.addEventListener('click', () => this.prev());
    }
    
    if (this.nextBtn) {
      this.nextBtn.addEventListener('click', () => this.next());
    }

    // Auto-play
    this.startAutoPlay();

    // Pause on hover
    this.container.addEventListener('mouseenter', () => this.stopAutoPlay());
    this.container.addEventListener('mouseleave', () => this.startAutoPlay());

    // Touch support for mobile
    this.initTouch();
  }

  goToSlide(index) {
    this.currentIndex = index;
    this.update();
  }

  next() {
    this.currentIndex = (this.currentIndex + 1) % this.items.length;
    this.update();
  }

  prev() {
    this.currentIndex = (this.currentIndex - 1 + this.items.length) % this.items.length;
    this.update();
  }

  update() {
    // Move track
    this.track.style.transform = `translateX(-${this.currentIndex * 100}%)`;
    
    // Update dots
    this.dots.forEach((dot, index) => {
      dot.classList.toggle('active', index === this.currentIndex);
    });
  }

  startAutoPlay() {
    this.stopAutoPlay();
    this.autoPlayInterval = setInterval(() => this.next(), 5000);
  }

  stopAutoPlay() {
    if (this.autoPlayInterval) {
      clearInterval(this.autoPlayInterval);
      this.autoPlayInterval = null;
    }
  }

  initTouch() {
    let startX = 0;
    let endX = 0;
    
    this.track.addEventListener('touchstart', (e) => {
      startX = e.touches[0].clientX;
    });
    
    this.track.addEventListener('touchmove', (e) => {
      endX = e.touches[0].clientX;
    });
    
    this.track.addEventListener('touchend', () => {
      const diff = startX - endX;
      if (Math.abs(diff) > 50) {
        if (diff > 0) {
          this.next();
        } else {
          this.prev();
        }
      }
    });
  }
}

// Form Validation System
class FormValidator {
  constructor(form) {
    this.form = form;
    this.init();
  }

  init() {
    // Real-time validation for inputs
    this.form.querySelectorAll('input, textarea, select').forEach(input => {
      input.addEventListener('blur', () => this.validateField(input));
      input.addEventListener('input', () => this.clearError(input));
    });

    // Form submission
    this.form.addEventListener('submit', (e) => {
      if (!this.validateForm()) {
        e.preventDefault();
        this.showFormError('Please fix the errors above');
      }
    });
  }

  validateField(field) {
    let isValid = true;
    let message = '';

    // Required validation
    if (field.hasAttribute('required') && !field.value.trim()) {
      isValid = false;
      message = 'This field is required';
    }

    // Email validation
    if (field.type === 'email' && field.value) {
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(field.value)) {
        isValid = false;
        message = 'Please enter a valid email address';
      }
    }

    // Phone validation
    if (field.type === 'tel' && field.value) {
      const phoneRegex = /^[\+]?[0-9\s\-\(\)]+$/;
      if (!phoneRegex.test(field.value.replace(/\s/g, ''))) {
        isValid = false;
        message = 'Please enter a valid phone number';
      }
    }

    // Min length validation
    if (field.dataset.minLength && field.value.length < field.dataset.minLength) {
      isValid = false;
      message = `Minimum ${field.dataset.minLength} characters required`;
    }

    if (!isValid) {
      this.showFieldError(field, message);
    } else {
      this.showFieldSuccess(field);
    }

    return isValid;
  }

  validateForm() {
    let isValid = true;
    const fields = this.form.querySelectorAll('input, textarea, select');
    
    fields.forEach(field => {
      if (!this.validateField(field)) {
        isValid = false;
      }
    });

    return isValid;
  }

  showFieldError(field, message) {
    this.clearError(field);
    
    const error = document.createElement('div');
    error.className = 'field-error';
    error.textContent = message;
    error.style.cssText = `
      color: #e74c3c;
      font-size: 0.875rem;
      margin-top: 0.25rem;
      animation: slideDown 0.3s ease-out;
    `;
    
    field.parentNode.appendChild(error);
    field.classList.add('error');
  }

  showFieldSuccess(field) {
    this.clearError(field);
    field.classList.add('success');
    
    // Add success checkmark
    if (!field.parentNode.querySelector('.success-icon')) {
      const icon = document.createElement('span');
      icon.className = 'success-icon';
      icon.innerHTML = '✓';
      icon.style.cssText = `
        position: absolute;
        right: 1rem;
        top: 50%;
        transform: translateY(-50%);
        color: #27ae60;
        font-weight: bold;
      `;
      field.parentNode.style.position = 'relative';
      field.parentNode.appendChild(icon);
    }
  }

  clearError(field) {
    const error = field.parentNode.querySelector('.field-error');
    if (error) error.remove();
    field.classList.remove('error');
    
    const icon = field.parentNode.querySelector('.success-icon');
    if (icon) icon.remove();
  }

  showFormError(message) {
    // Remove existing form error
    const existingError = this.form.querySelector('.form-error');
    if (existingError) existingError.remove();

    const error = document.createElement('div');
    error.className = 'alert alert-error form-error';
    error.innerHTML = `
      <span>${message}</span>
      <button class="alert-close">×</button>
    `;
    
    this.form.insertBefore(error, this.form.firstChild);
    
    // Add close functionality
    error.querySelector('.alert-close').addEventListener('click', () => error.remove());
  }
}

// Package Filtering System
class PackageFilter {
  constructor(container) {
    this.container = container;
    this.filters = container.querySelectorAll('.filter-btn');
    this.packages = container.querySelectorAll('.package-card');
    this.init();
  }

  init() {
    this.filters.forEach(filter => {
      filter.addEventListener('click', () => {
        // Update active filter
        this.filters.forEach(f => f.classList.remove('active'));
        filter.classList.add('active');
        
        // Filter packages
        const category = filter.dataset.category;
        this.filterPackages(category);
      });
    });
  }

  filterPackages(category) {
    this.packages.forEach(pkg => {
      if (category === 'all' || pkg.dataset.category === category) {
        pkg.style.display = 'block';
        setTimeout(() => {
          pkg.classList.add('visible');
          pkg.style.opacity = '1';
          pkg.style.transform = 'translateY(0)';
        }, 100);
      } else {
        pkg.classList.remove('visible');
        pkg.style.opacity = '0';
        pkg.style.transform = 'translateY(20px)';
        setTimeout(() => {
          pkg.style.display = 'none';
        }, 300);
      }
    });
  }
}

// Alert System
class AlertManager {
  constructor() {
    this.init();
  }

  init() {
    // Auto-dismiss alerts after 5 seconds
    document.querySelectorAll('.alert:not(.alert-persistent)').forEach(alert => {
      setTimeout(() => {
        this.dismiss(alert);
      }, 5000);
    });

    // Close buttons
    document.querySelectorAll('.alert .alert-close').forEach(btn => {
      btn.addEventListener('click', () => {
        this.dismiss(btn.parentElement);
      });
    });
  }

  dismiss(alert) {
    alert.style.transform = 'translateX(100%)';
    alert.style.opacity = '0';
    
    setTimeout(() => {
      if (alert.parentNode) {
        alert.parentNode.removeChild(alert);
      }
    }, 300);
  }

  static show(message, type = 'info') {
    const alert = document.createElement('div');
    alert.className = `alert alert-${type}`;
    alert.innerHTML = `
      <span>${message}</span>
      <button class="alert-close">×</button>
    `;
    
    const container = document.querySelector('.alert-container') || document.body;
    container.appendChild(alert);
    
    // Add close functionality
    alert.querySelector('.alert-close').addEventListener('click', () => {
      new AlertManager().dismiss(alert);
    });
    
    // Auto-dismiss
    setTimeout(() => {
      new AlertManager().dismiss(alert);
    }, 5000);
  }
}

// Smooth Scroll
class SmoothScroller {
  constructor() {
    this.init();
  }

  init() {
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', (e) => {
        const href = anchor.getAttribute('href');
        if (href === '#') return;
        
        const target = document.querySelector(href);
        if (target) {
          e.preventDefault();
          this.scrollTo(target);
        }
      });
    });
  }

  scrollTo(target) {
    const targetPosition = target.getBoundingClientRect().top + window.pageYOffset;
    const startPosition = window.pageYOffset;
    const distance = targetPosition - startPosition;
    const duration = 800;
    let start = null;

    function animation(currentTime) {
      if (start === null) start = currentTime;
      const timeElapsed = currentTime - start;
      const progress = Math.min(timeElapsed / duration, 1);
      
      // Easing function
      const ease = progress < 0.5 
        ? 2 * progress * progress 
        : 1 - Math.pow(-2 * progress + 2, 2) / 2;
      
      window.scrollTo(0, startPosition + distance * ease);
      
      if (timeElapsed < duration) {
        requestAnimationFrame(animation);
      }
    }

    requestAnimationFrame(animation);
  }
}

// Initialize everything when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
  // Initialize theme manager
  new ThemeManager();
  
  // Initialize scroll animations
  new ScrollAnimator();
  
  // Initialize parallax effects
  new ParallaxController();
  
  // Initialize carousels
  document.querySelectorAll('.carousel').forEach(carousel => {
    new Carousel(carousel);
  });
  
  // Initialize form validators
  document.querySelectorAll('form').forEach(form => {
    new FormValidator(form);
  });
  
  // Initialize package filters
  document.querySelectorAll('.package-filter').forEach(filter => {
    new PackageFilter(filter);
  });
  
  // Initialize alert manager
  new AlertManager();
  
  // Initialize smooth scroll
  new SmoothScroller();
  
  // Add loading animation
  const loading = document.getElementById('loading');
  if (loading) {
    setTimeout(() => {
      loading.style.opacity = '0';
      setTimeout(() => {
        if (loading.parentNode) {
          loading.parentNode.removeChild(loading);
        }
      }, 300);
    }, 500);
  }
});

// Utility function for debouncing
function debounce(func, wait) {
  let timeout;
  return function executedFunction(...args) {
    const later = () => {
      clearTimeout(timeout);
      func(...args);
    };
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
  };
}

// Utility function for throttling
function throttle(func, limit) {
  let inThrottle;
  return function() {
    const args = arguments;
    const context = this;
    if (!inThrottle) {
      func.apply(context, args);
      inThrottle = true;
      setTimeout(() => inThrottle = false, limit);
    }
  };
}

// Export for use in other modules (if needed)
window.TravelersApp = {
  ThemeManager,
  ScrollAnimator,
  ParallaxController,
  Carousel,
  FormValidator,
  PackageFilter,
  AlertManager,
  SmoothScroller
};