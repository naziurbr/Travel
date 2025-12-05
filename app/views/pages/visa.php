<!-- Visa Services Hero -->
<section class="visa-hero">
  <div class="hero-background">
    <div class="background-overlay"></div>
  </div>
  
  <div class="container">
    <div class="hero-content scroll-animate">
      <h1 class="hero-title">
        <span class="text-gradient">Premium</span> Visa Services
      </h1>
      <p class="hero-subtitle">
        Hassle-free visa processing with expert guidance, fast-track options,<br>
        and a 98% success rate for travelers worldwide.
      </p>
      
      <!-- Quick Stats -->
      <div class="hero-stats">
        <div class="stat-item">
          <div class="stat-number" data-count="150">0</div>
          <div class="stat-label">Countries</div>
        </div>
        <div class="stat-item">
          <div class="stat-number" data-count="98">0</div>
          <div class="stat-label">Success Rate</div>
        </div>
        <div class="stat-item">
          <div class="stat-number" data-count="24">0</div>
          <div class="stat-label">/7 Support</div>
        </div>
        <div class="stat-item">
          <div class="stat-number" data-count="48">0</div>
          <div class="stat-label">Hour Express</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Visa Services Section -->
<section class="section visa-services-section">
  <div class="container">
    <div class="section-header scroll-animate">
      <h2 class="section-title">Streamlined Visa Processing</h2>
      <p class="section-description">
        Let our visa experts handle the complex documentation and requirements while you focus on planning your trip.
      </p>
    </div>
    
    <div class="visa-layout">
      <!-- Visa Inquiry Form -->
      <div class="visa-form-container scroll-animate">
        <div class="form-card">
          <div class="form-header">
            <h3 class="form-title">
              <i class="fas fa-passport"></i>
              Visa Inquiry Form
            </h3>
            <p class="form-subtitle">
              Fill in your details and our visa experts will contact you within 2 hours.
            </p>
          </div>
          
          <form method="post" class="premium-visa-form" id="visaInquiryForm">
            <?= csrf_field() ?>
            <input type="hidden" name="inquiry_type" value="visa">
            
            <!-- Personal Details -->
            <div class="form-section">
              <h4 class="section-title">
                <i class="fas fa-user"></i>
                Personal Details
              </h4>
              
              <div class="form-grid">
                <div class="form-group">
                  <label class="form-label">
                    Full Name *
                  </label>
                  <input type="text" 
                         name="name" 
                         class="form-control"
                         placeholder="Enter your full name as per passport"
                         required
                         data-validation="name">
                  <div class="form-error" data-error="name"></div>
                </div>
                
                <div class="form-group">
                  <label class="form-label">
                    Phone Number *
                  </label>
                  <div class="phone-input">
                    <select name="country_code" class="country-code">
                      <option value="+1">+1 (USA)</option>
                      <option value="+44">+44 (UK)</option>
                      <option value="+971">+971 (UAE)</option>
                      <option value="+65">+65 (SG)</option>
                      <option value="+60">+60 (MY)</option>
                      <option value="+91">+91 (IN)</option>
                      <option value="+86">+86 (CN)</option>
                    </select>
                    <input type="tel" 
                           name="phone" 
                           class="form-control phone-number"
                           placeholder="Enter phone number"
                           required
                           data-validation="phone">
                  </div>
                  <div class="form-error" data-error="phone"></div>
                </div>
                
                <div class="form-group">
                  <label class="form-label">
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
                    Nationality *
                  </label>
                  <div class="select-wrapper">
                    <select name="nationality" class="form-control" required>
                      <option value="">Select Nationality</option>
                      <option value="indian">Indian</option>
                      <option value="pakistani">Pakistani</option>
                      <option value="bangladeshi">Bangladeshi</option>
                      <option value="srilankan">Sri Lankan</option>
                      <option value="nepalese">Nepalese</option>
                      <option value="filipino">Filipino</option>
                      <option value="indonesian">Indonesian</option>
                      <option value="vietnamese">Vietnamese</option>
                      <option value="thai">Thai</option>
                      <option value="other">Other</option>
                    </select>
                    <i class="fas fa-chevron-down select-icon"></i>
                  </div>
                  <div class="form-error" data-error="nationality"></div>
                </div>
              </div>
            </div>
            
            <!-- Passport Details -->
            <div class="form-section">
              <h4 class="section-title">
                <i class="fas fa-id-card"></i>
                Passport Details
              </h4>
              
              <div class="form-grid">
                <div class="form-group">
                  <label class="form-label">
                    Passport Number *
                  </label>
                  <input type="text" 
                         name="passport_number" 
                         class="form-control"
                         placeholder="Enter passport number"
                         required
                         pattern="[A-Z0-9]{6,12}"
                         title="Enter valid passport number">
                  <div class="form-error" data-error="passport_number"></div>
                </div>
                
                <div class="form-group">
                  <label class="form-label">
                    Date of Birth *
                  </label>
                  <div class="date-input">
                    <input type="text" 
                           name="date_of_birth" 
                           class="form-control datepicker"
                           placeholder="Select date"
                           required
                           readonly>
                    <i class="fas fa-calendar date-icon"></i>
                  </div>
                  <div class="form-error" data-error="date_of_birth"></div>
                </div>
                
                <div class="form-group">
                  <label class="form-label">
                    Passport Issue Date *
                  </label>
                  <div class="date-input">
                    <input type="text" 
                           name="passport_issue_date" 
                           class="form-control datepicker"
                           placeholder="Select date"
                           required
                           readonly>
                    <i class="fas fa-calendar date-icon"></i>
                  </div>
                  <div class="form-error" data-error="passport_issue_date"></div>
                </div>
                
                <div class="form-group">
                  <label class="form-label">
                    Passport Expiry Date *
                  </label>
                  <div class="date-input">
                    <input type="text" 
                           name="passport_expiry_date" 
                           class="form-control datepicker"
                           placeholder="Select date"
                           required
                           readonly>
                    <i class="fas fa-calendar date-icon"></i>
                  </div>
                  <div class="form-error" data-error="passport_expiry_date"></div>
                </div>
              </div>
            </div>
            
            <!-- Travel Details -->
            <div class="form-section">
              <h4 class="section-title">
                <i class="fas fa-plane"></i>
                Travel Details
              </h4>
              
              <div class="form-grid">
                <div class="form-group">
                  <label class="form-label">
                    Destination Country *
                  </label>
                  <div class="select-wrapper">
                    <select name="destination" class="form-control destination-select" required>
                      <option value="">Select Destination</option>
                      <optgroup label="Asia">
                        <option value="uae">United Arab Emirates</option>
                        <option value="malaysia">Malaysia</option>
                        <option value="singapore">Singapore</option>
                        <option value="thailand">Thailand</option>
                        <option value="indonesia">Indonesia</option>
                        <option value="south_korea">South Korea</option>
                        <option value="japan">Japan</option>
                        <option value="china">China</option>
                      </optgroup>
                      <optgroup label="Europe">
                        <option value="uk">United Kingdom</option>
                        <option value="france">France</option>
                        <option value="germany">Germany</option>
                        <option value="italy">Italy</option>
                        <option value="spain">Spain</option>
                        <option value="switzerland">Switzerland</option>
                      </optgroup>
                      <optgroup label="Americas">
                        <option value="usa">United States</option>
                        <option value="canada">Canada</option>
                        <option value="australia">Australia</option>
                      </optgroup>
                    </select>
                    <i class="fas fa-chevron-down select-icon"></i>
                  </div>
                  <div class="form-error" data-error="destination"></div>
                </div>
                
                <div class="form-group">
                  <label class="form-label">
                    Visa Type *
                  </label>
                  <div class="select-wrapper">
                    <select name="visa_type" class="form-control" required>
                      <option value="">Select Visa Type</option>
                      <option value="tourist">Tourist Visa</option>
                      <option value="business">Business Visa</option>
                      <option value="visit">Visit Visa</option>
                      <option value="transit">Transit Visa</option>
                      <option value="student">Student Visa</option>
                      <option value="work">Work Visa</option>
                      <option value="medical">Medical Visa</option>
                    </select>
                    <i class="fas fa-chevron-down select-icon"></i>
                  </div>
                  <div class="form-error" data-error="visa_type"></div>
                </div>
                
                <div class="form-group">
                  <label class="form-label">
                    Intended Travel Date *
                  </label>
                  <div class="date-input">
                    <input type="text" 
                           name="travel_date" 
                           class="form-control datepicker"
                           placeholder="Select date"
                           required
                           readonly>
                    <i class="fas fa-calendar date-icon"></i>
                  </div>
                  <div class="form-error" data-error="travel_date"></div>
                </div>
                
                <div class="form-group">
                  <label class="form-label">
                    Processing Time
                  </label>
                  <div class="radio-group">
                    <label class="radio-option">
                      <input type="radio" name="processing_time" value="standard" checked>
                      <span class="radio-checkmark"></span>
                      <span class="radio-label">Standard (5-7 days)</span>
                    </label>
                    <label class="radio-option">
                      <input type="radio" name="processing_time" value="express">
                      <span class="radio-checkmark"></span>
                      <span class="radio-label">Express (48 hours)</span>
                    </label>
                    <label class="radio-option">
                      <input type="radio" name="processing_time" value="urgent">
                      <span class="radio-checkmark"></span>
                      <span class="radio-label">Urgent (24 hours)</span>
                    </label>
                  </div>
                </div>
              </div>
              
              <!-- Additional Travel Details -->
              <div class="form-group">
                <label class="form-label">
                  <i class="fas fa-users"></i>
                  Number of Travelers
                </label>
                <div class="travelers-select">
                  <button type="button" class="traveler-btn minus" data-target="travelers">-</button>
                  <input type="number" 
                         name="travelers" 
                         class="form-control traveler-input"
                         value="1"
                         min="1"
                         max="10"
                         readonly>
                  <button type="button" class="traveler-btn plus" data-target="travelers">+</button>
                  <span class="traveler-label">Traveler(s)</span>
                </div>
              </div>
            </div>
            
            <!-- Additional Information -->
            <div class="form-section">
              <h4 class="section-title">
                <i class="fas fa-info-circle"></i>
                Additional Information
              </h4>
              
              <div class="form-group">
                <label class="form-label">
                  Purpose of Travel *
                </label>
                <textarea name="purpose" 
                          class="form-control"
                          rows="3"
                          placeholder="Briefly describe the purpose of your travel (tourism, business meeting, family visit, etc.)"
                          required></textarea>
                <div class="form-error" data-error="purpose"></div>
              </div>
              
              <div class="form-group">
                <label class="form-label">
                  Previous Visa History
                </label>
                <textarea name="visa_history" 
                          class="form-control"
                          rows="2"
                          placeholder="List any previous visas you've held (country, type, dates)"></textarea>
              </div>
              
              <div class="form-group">
                <label class="form-label">
                  Special Requirements
                </label>
                <textarea name="special_requirements" 
                          class="form-control"
                          rows="2"
                          placeholder="Any special requirements or notes for our visa experts"></textarea>
              </div>
            </div>
            
            <!-- Document Upload -->
            <div class="form-section">
              <h4 class="section-title">
                <i class="fas fa-file-upload"></i>
                Document Upload (Optional)
              </h4>
              
              <div class="document-upload">
                <div class="upload-info">
                  <p>You can upload documents now or our visa expert will guide you through the required documents.</p>
                </div>
                
                <div class="upload-zone" id="uploadZone">
                  <i class="fas fa-cloud-upload-alt upload-icon"></i>
                  <h5>Drop files here or click to upload</h5>
                  <p>Supported files: PDF, JPG, PNG (Max 5MB each)</p>
                  <input type="file" 
                         name="documents[]" 
                         class="file-input"
                         id="fileInput"
                         multiple
                         accept=".pdf,.jpg,.jpeg,.png">
                </div>
                
                <div class="file-list" id="fileList"></div>
                
                <div class="upload-requirements">
                  <h6>Commonly Required Documents:</h6>
                  <ul>
                    <li><i class="fas fa-check-circle"></i> Passport copy (first & last page)</li>
                    <li><i class="fas fa-check-circle"></i> Passport-size photographs</li>
                    <li><i class="fas fa-check-circle"></i> Bank statements (last 3-6 months)</li>
                    <li><i class="fas fa-check-circle"></i> Employment proof / Business documents</li>
                    <li><i class="fas fa-check-circle"></i> Hotel & flight bookings</li>
                    <li><i class="fas fa-check-circle"></i> Travel insurance</li>
                  </ul>
                </div>
              </div>
            </div>
            
            <!-- Terms & Submission -->
            <div class="form-section">
              <div class="terms-agreement">
                <label class="checkbox-label">
                  <input type="checkbox" name="terms" required>
                  <span class="checkmark"></span>
                  <span class="terms-text">
                    I agree to the <a href="index.php?page=terms" target="_blank">Terms & Conditions</a> and 
                    <a href="index.php?page=privacy" target="_blank">Privacy Policy</a>. I confirm that all information provided is accurate.
                  </span>
                </label>
                <div class="form-error" data-error="terms"></div>
              </div>
              
              <div class="form-actions">
                <button type="submit" class="btn btn-primary btn-lg">
                  <i class="fas fa-paper-plane"></i>
                  <span>Submit Visa Inquiry</span>
                </button>
                <button type="button" class="btn btn-outline btn-lg" id="scheduleConsultation">
                  <i class="fas fa-calendar-alt"></i>
                  <span>Schedule Consultation</span>
                </button>
              </div>
              
              <div class="form-footer">
                <p class="form-note">
                  <i class="fas fa-shield-alt"></i>
                  Your information is secure and will only be used for visa processing.
                </p>
                <p class="form-note">
                  <i class="fas fa-clock"></i>
                  Our visa experts will contact you within 2 hours during business hours.
                </p>
              </div>
            </div>
          </form>
        </div>
      </div>
      
      <!-- Visa Services Info -->
      <aside class="visa-info-sidebar scroll-animate" style="animation-delay: 0.1s">
        <!-- Process Timeline -->
        <div class="info-card process-card">
          <h3 class="card-title">
            <i class="fas fa-list-ol"></i>
            Our Visa Process
          </h3>
          
          <div class="process-timeline">
            <div class="process-step active">
              <div class="step-number">1</div>
              <div class="step-content">
                <h4>Initial Consultation</h4>
                <p>Free assessment of your visa requirements</p>
              </div>
            </div>
            
            <div class="process-step">
              <div class="step-number">2</div>
              <div class="step-content">
                <h4>Documentation</h4>
                <p>We provide a complete document checklist</p>
              </div>
            </div>
            
            <div class="process-step">
              <div class="step-number">3</div>
              <div class="step-content">
                <h4>Application Filing</h4>
                <p>Expert preparation and submission</p>
              </div>
            </div>
            
            <div class="process-step">
              <div class="step-number">4</div>
              <div class="step-content">
                <h4>Tracking & Updates</h4>
                <p>Regular updates on application status</p>
              </div>
            </div>
            
            <div class="process-step">
              <div class="step-number">5</div>
              <div class="step-content">
                <h4>Visa Collection</h4>
                <p>Secure delivery of your visa</p>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Popular Destinations -->
        <div class="info-card destinations-card">
          <h3 class="card-title">
            <i class="fas fa-globe-americas"></i>
            Popular Visa Destinations
          </h3>
          
          <div class="destinations-list">
            <div class="destination-item">
              <div class="destination-flag">
                <i class="fas fa-flag-usa"></i>
              </div>
              <div class="destination-info">
                <h4>United States</h4>
                <div class="destination-meta">
                  <span><i class="fas fa-clock"></i> 10-15 days</span>
                  <span><i class="fas fa-money-bill-wave"></i> From $160</span>
                </div>
              </div>
            </div>
            
            <div class="destination-item">
              <div class="destination-flag">
                <i class="fas fa-flag"></i>
              </div>
              <div class="destination-info">
                <h4>United Kingdom</h4>
                <div class="destination-meta">
                  <span><i class="fas fa-clock"></i> 7-10 days</span>
                  <span><i class="fas fa-money-bill-wave"></i> From £100</span>
                </div>
              </div>
            </div>
            
            <div class="destination-item">
              <div class="destination-flag">
                <i class="fas fa-flag"></i>
              </div>
              <div class="destination-info">
                <h4>United Arab Emirates</h4>
                <div class="destination-meta">
                  <span><i class="fas fa-clock"></i> 3-5 days</span>
                  <span><i class="fas fa-money-bill-wave"></i> From AED 350</span>
                </div>
              </div>
            </div>
            
            <div class="destination-item">
              <div class="destination-flag">
                <i class="fas fa-flag"></i>
              </div>
              <div class="destination-info">
                <h4>Singapore</h4>
                <div class="destination-meta">
                  <span><i class="fas fa-clock"></i> 2-3 days</span>
                  <span><i class="fas fa-money-bill-wave"></i> From SGD 30</span>
                </div>
              </div>
            </div>
            
            <div class="destination-item">
              <div class="destination-flag">
                <i class="fas fa-flag"></i>
              </div>
              <div class="destination-info">
                <h4>Malaysia</h4>
                <div class="destination-meta">
                  <span><i class="fas fa-clock"></i> 1-2 days</span>
                  <span><i class="fas fa-money-bill-wave"></i> From MYR 100</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Why Choose Us -->
        <div class="info-card benefits-card">
          <h3 class="card-title">
            <i class="fas fa-award"></i>
            Why Choose Our Service
          </h3>
          
          <div class="benefits-list">
            <div class="benefit-item">
              <i class="fas fa-user-check benefit-icon"></i>
              <div class="benefit-content">
                <h4>Expert Guidance</h4>
                <p>Dedicated visa consultants with 10+ years experience</p>
              </div>
            </div>
            
            <div class="benefit-item">
              <i class="fas fa-percentage benefit-icon"></i>
              <div class="benefit-content">
                <h4>98% Success Rate</h4>
                <p>Industry-leading visa approval rate</p>
              </div>
            </div>
            
            <div class="benefit-item">
              <i class="fas fa-headset benefit-icon"></i>
              <div class="benefit-content">
                <h4>24/7 Support</h4>
                <p>Round-the-clock assistance available</p>
              </div>
            </div>
            
            <div class="benefit-item">
              <i class="fas fa-file-contract benefit-icon"></i>
              <div class="benefit-content">
                <h4>Money-Back Guarantee</h4>
                <p>Full refund if visa is not approved*</p>
              </div>
            </div>
          </div>
        </div>
        
        <!-- Quick Contact -->
        <div class="info-card contact-card">
          <h3 class="card-title">
            <i class="fas fa-headset"></i>
            Need Immediate Help?
          </h3>
          
          <div class="contact-methods">
            <a href="tel:+97145565258" class="contact-method">
              <i class="fas fa-phone-alt"></i>
              <div>
                <span>Call Now</span>
                <strong>+971 4 556 5258</strong>
              </div>
            </a>
            
            <a href="https://wa.me/97145565258" class="contact-method" target="_blank">
              <i class="fab fa-whatsapp"></i>
              <div>
                <span>WhatsApp</span>
                <strong>+971 4 556 5258</strong>
              </div>
            </a>
            
            <a href="mailto:visa@travelersofdestination.com" class="contact-method">
              <i class="fas fa-envelope"></i>
              <div>
                <span>Email Us</span>
                <strong>visa@travelersofdestination.com</strong>
              </div>
            </a>
          </div>
          
          <div class="office-hours">
            <h4>
              <i class="fas fa-clock"></i>
              Office Hours
            </h4>
            <p>Sun-Thu: 9:00 AM - 8:00 PM<br>
               Fri-Sat: 10:00 AM - 6:00 PM</p>
          </div>
        </div>
      </aside>
    </div>
  </div>
</section>

<!-- Visa Types Section -->
<section class="section visa-types-section">
  <div class="container">
    <div class="section-header scroll-animate">
      <h2 class="section-title">Types of Visas We Process</h2>
      <p class="section-description">
        Comprehensive visa services for all your travel needs.
      </p>
    </div>
    
    <div class="visa-types-grid scroll-animate" style="animation-delay: 0.1s">
      <div class="visa-type-card">
        <div class="visa-icon">
          <i class="fas fa-camera"></i>
        </div>
        <h3>Tourist Visa</h3>
        <p>For leisure travel, sightseeing, and visiting friends/family.</p>
        <ul class="visa-features">
          <li><i class="fas fa-check"></i> Single/Multiple entry</li>
          <li><i class="fas fa-check"></i> 30-90 days validity</li>
          <li><i class="fas fa-check"></i> Fast-track available</li>
        </ul>
      </div>
      
      <div class="visa-type-card">
        <div class="visa-icon">
          <i class="fas fa-briefcase"></i>
        </div>
        <h3>Business Visa</h3>
        <p>For business meetings, conferences, and corporate travel.</p>
        <ul class="visa-features">
          <li><i class="fas fa-check"></i> Meeting invitations</li>
          <li><i class="fas fa-check"></i> Company documentation</li>
          <li><i class="fas fa-check"></i> Multiple entry options</li>
        </ul>
      </div>
      
      <div class="visa-type-card">
        <div class="visa-icon">
          <i class="fas fa-graduation-cap"></i>
        </div>
        <h3>Student Visa</h3>
        <p>For educational purposes and academic institutions.</p>
        <ul class="visa-features">
          <li><i class="fas fa-check"></i> University acceptance</li>
          <li><i class="fas fa-check"></i> Financial proof</li>
          <li><i class="fas fa-check"></i> Long-term validity</li>
        </ul>
      </div>
      
      <div class="visa-type-card">
        <div class="visa-icon">
          <i class="fas fa-stethoscope"></i>
        </div>
        <h3>Medical Visa</h3>
        <p>For medical treatment and healthcare consultations.</p>
        <ul class="visa-features">
          <li><i class="fas fa-check"></i> Hospital appointments</li>
          <li><i class="fas fa-check"></i> Medical reports</li>
          <li><i class="fas fa-check"></i> Accompanying persons</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- FAQ Section -->
<section class="section faq-section">
  <div class="container">
    <div class="section-header scroll-animate">
      <h2 class="section-title">Frequently Asked Questions</h2>
      <p class="section-description">
        Common questions about our visa services.
      </p>
    </div>
    
    <div class="faq-grid scroll-animate" style="animation-delay: 0.1s">
      <div class="faq-item">
        <button class="faq-question">
          How long does visa processing take?
          <i class="fas fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>Processing times vary by destination and visa type. Standard processing takes 5-7 business days, express service takes 48 hours, and urgent service takes 24 hours. Our experts will provide exact timelines based on your specific requirements.</p>
        </div>
      </div>
      
      <div class="faq-item">
        <button class="faq-question">
          What documents are required?
          <i class="fas fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>Requirements vary by country and visa type. Generally, you'll need passport copies, photographs, financial documents, travel itinerary, and supporting documents based on visa purpose. Our experts provide a complete personalized checklist after assessing your case.</p>
        </div>
      </div>
      
      <div class="faq-item">
        <button class="faq-question">
          Do you offer visa approval guarantee?
          <i class="fas fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>Yes, we offer a money-back guarantee* if your visa application is rejected due to our error or incomplete documentation. We maintain a 98% success rate through expert guidance and thorough document verification.</p>
        </div>
      </div>
      
      <div class="faq-item">
        <button class="faq-question">
          Can I track my visa application?
          <i class="fas fa-chevron-down"></i>
        </button>
        <div class="faq-answer">
          <p>Absolutely! We provide regular updates via email and SMS. You'll also have access to our online portal where you can track real-time application status and receive notifications for any document requests or updates.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA Section -->
<section class="section cta-section">
  <div class="container">
    <div class="cta-content scroll-animate">
      <div class="cta-text">
        <h2 class="cta-title">Ready to Start Your Visa Application?</h2>
        <p class="cta-description">
          Contact our visa experts today for a free consultation and personalized guidance.
        </p>
      </div>
      
      <div class="cta-buttons">
        <a href="tel:+97145565258" class="btn btn-primary btn-lg">
          <i class="fas fa-phone-alt"></i>
          <span>Call Now</span>
        </a>
        <button class="btn btn-secondary btn-lg" id="whatsappVisa">
          <i class="fab fa-whatsapp"></i>
          <span>WhatsApp Us</span>
        </button>
      </div>
    </div>
  </div>
</section>

<!-- CSS for Visa Page -->
<style>
/* Visa Hero */
.visa-hero {
  position: relative;
  min-height: 70vh;
  display: flex;
  align-items: center;
  color: white;
  overflow: hidden;
  background: linear-gradient(135deg, var(--deep-ocean-blue), var(--midnight-navy));
}

.visa-hero .hero-background {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: url('<?= APP_URL ?>/public/images/visa-hero.jpg') center/cover;
}

.visa-hero .background-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(135deg, rgba(10, 61, 98, 0.9), rgba(6, 32, 52, 0.95));
}

.visa-hero .hero-content {
  position: relative;
  z-index: 2;
  text-align: center;
  padding: 100px 0 60px;
}

.visa-hero .hero-title {
  font-size: 3.5rem;
  margin-bottom: 20px;
  color: white;
  background: none;
}

.visa-hero .hero-subtitle {
  font-size: 1.2rem;
  opacity: 0.9;
  margin-bottom: 40px;
  line-height: 1.6;
  max-width: 800px;
  margin-left: auto;
  margin-right: auto;
}

.visa-hero .hero-stats {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 40px;
  margin-top: 60px;
}

.visa-hero .stat-item {
  text-align: center;
}

.visa-hero .stat-number {
  font-size: 2.5rem;
  font-weight: 700;
  color: var(--sunset-gold);
  margin-bottom: 5px;
}

.visa-hero .stat-label {
  font-size: 0.9rem;
  opacity: 0.8;
  text-transform: uppercase;
  letter-spacing: 1px;
}

/* Visa Layout */
.visa-layout {
  display: grid;
  grid-template-columns: 1fr 400px;
  gap: 60px;
}

@media (max-width: 1200px) {
  .visa-layout {
    grid-template-columns: 1fr;
    gap: 40px;
  }
}

/* Visa Form */
.visa-form-container {
  position: relative;
}

.form-card {
  background: white;
  border-radius: 25px;
  overflow: hidden;
  box-shadow: var(--shadow-lg);
}

.form-header {
  background: linear-gradient(135deg, var(--deep-ocean-blue), var(--midnight-navy));
  color: white;
  padding: 40px;
  text-align: center;
}

.form-title {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 15px;
  font-size: 2rem;
  margin: 0 0 15px 0;
}

.form-title i {
  color: var(--sunset-gold);
}

.form-subtitle {
  margin: 0;
  opacity: 0.9;
  font-size: 1.1rem;
  line-height: 1.5;
}

/* Form Sections */
.form-section {
  padding: 40px;
  border-bottom: 1px solid var(--glass-border);
}

.form-section:last-child {
  border-bottom: none;
}

.form-section .section-title {
  display: flex;
  align-items: center;
  gap: 10px;
  color: var(--deep-ocean-blue);
  margin-bottom: 25px;
  font-size: 1.3rem;
}

.form-section .section-title i {
  color: var(--horizon-cyan);
}

.form-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 25px;
  margin-bottom: 30px;
}

@media (max-width: 768px) {
  .form-grid {
    grid-template-columns: 1fr;
  }
}

/* Phone Input */
.phone-input {
  display: flex;
  gap: 10px;
}

.country-code {
  width: 120px;
  padding: 15px;
  border: 2px solid var(--glass-border);
  border-radius: 12px;
  background: white;
  color: var(--midnight-navy);
  font-weight: 500;
  cursor: pointer;
}

.phone-number {
  flex: 1;
}

/* Radio Group */
.radio-group {
  display: flex;
  gap: 20px;
  flex-wrap: wrap;
  padding: 10px 0;
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

/* Travelers Select */
.travelers-select {
  display: flex;
  align-items: center;
  gap: 15px;
  max-width: 300px;
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
  width: 80px;
  text-align: center;
  font-weight: 700;
  font-size: 1.2rem;
}

.traveler-label {
  color: rgba(var(--midnight-navy), 0.7);
  font-size: 0.9rem;
}

/* Document Upload */
.document-upload {
  padding: 20px 0;
}

.upload-info {
  margin-bottom: 25px;
  padding: 20px;
  background: var(--glass-bg);
  border-radius: 12px;
}

.upload-info p {
  margin: 0;
  color: rgba(var(--midnight-navy), 0.7);
  font-size: 0.95rem;
  line-height: 1.5;
}

.upload-zone {
  border: 3px dashed var(--glass-border);
  border-radius: 15px;
  padding: 50px 30px;
  text-align: center;
  cursor: pointer;
  transition: all var(--transition-fast);
  margin-bottom: 25px;
  position: relative;
}

.upload-zone:hover {
  border-color: var(--horizon-cyan);
  background: rgba(34, 166, 179, 0.05);
}

.upload-zone.dragover {
  border-color: var(--sunset-gold);
  background: rgba(240, 165, 0, 0.05);
}

.upload-icon {
  font-size: 3rem;
  color: var(--horizon-cyan);
  margin-bottom: 15px;
}

.upload-zone h5 {
  margin: 0 0 10px 0;
  color: var(--midnight-navy);
}

.upload-zone p {
  margin: 0;
  color: rgba(var(--midnight-navy), 0.6);
  font-size: 0.9rem;
}

.file-input {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  opacity: 0;
  cursor: pointer;
}

.file-list {
  margin-bottom: 25px;
}

.file-item {
  display: flex;
  align-items: center;
  gap: 15px;
  padding: 15px;
  background: var(--glass-bg);
  border-radius: 10px;
  margin-bottom: 10px;
}

.file-icon {
  color: var(--horizon-cyan);
  font-size: 1.5rem;
}

.file-info {
  flex: 1;
}

.file-name {
  display: block;
  font-weight: 600;
  color: var(--midnight-navy);
  margin-bottom: 2px;
}

.file-size {
  display: block;
  font-size: 0.85rem;
  color: rgba(var(--midnight-navy), 0.6);
}

.file-remove {
  background: none;
  border: none;
  color: #e74c3c;
  cursor: pointer;
  font-size: 1.2rem;
  padding: 5px;
}

.upload-requirements {
  padding: 25px;
  background: rgba(34, 166, 179, 0.05);
  border-radius: 12px;
}

.upload-requirements h6 {
  margin: 0 0 15px 0;
  color: var(--deep-ocean-blue);
  font-size: 1rem;
}

.upload-requirements ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

.upload-requirements li {
  display: flex;
  align-items: center;
  gap: 10px;
  padding: 8px 0;
  color: rgba(var(--midnight-navy), 0.7);
  font-size: 0.9rem;
}

.upload-requirements i {
  color: var(--horizon-cyan);
}

/* Terms Agreement */
.terms-agreement {
  margin-bottom: 30px;
}

.checkbox-label {
  display: flex;
  align-items: flex-start;
  gap: 15px;
  cursor: pointer;
}

.checkbox-label .checkmark {
  width: 20px;
  height: 20px;
  border: 2px solid var(--glass-border);
  border-radius: 4px;
  position: relative;
  flex-shrink: 0;
  margin-top: 3px;
  transition: all var(--transition-fast);
}

.checkbox-label input:checked + .checkmark {
  background: var(--horizon-cyan);
  border-color: var(--horizon-cyan);
}

.checkbox-label input:checked + .checkmark::after {
  content: '✓';
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  font-size: 0.8rem;
  font-weight: bold;
}

.terms-text {
  flex: 1;
  color: rgba(var(--midnight-navy), 0.8);
  font-size: 0.95rem;
  line-height: 1.5;
}

.terms-text a {
  color: var(--horizon-cyan);
  text-decoration: none;
  font-weight: 600;
}

.terms-text a:hover {
  text-decoration: underline;
}

/* Form Actions */
.form-actions {
  display: flex;
  gap: 20px;
  margin-bottom: 30px;
}

@media (max-width: 768px) {
  .form-actions {
    flex-direction: column;
  }
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

/* Visa Info Sidebar */
.info-card {
  background: white;
  border-radius: 20px;
  padding: 30px;
  box-shadow: var(--shadow-md);
  margin-bottom: 30px;
}

.info-card:last-child {
  margin-bottom: 0;
}

.card-title {
  display: flex;
  align-items: center;
  gap: 10px;
  color: var(--deep-ocean-blue);
  margin-bottom: 25px;
  font-size: 1.3rem;
}

.card-title i {
  color: var(--sunset-gold);
}

/* Process Timeline */
.process-timeline {
  position: relative;
  padding-left: 40px;
}

.process-timeline::before {
  content: '';
  position: absolute;
  left: 20px;
  top: 0;
  bottom: 0;
  width: 2px;
  background: var(--glass-border);
}

.process-step {
  position: relative;
  margin-bottom: 30px;
}

.process-step:last-child {
  margin-bottom: 0;
}

.step-number {
  position: absolute;
  left: -40px;
  top: 0;
  width: 40px;
  height: 40px;
  background: var(--glass-bg);
  border: 2px solid var(--glass-border);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 700;
  color: var(--midnight-navy);
  z-index: 2;
}

.process-step.active .step-number {
  background: var(--sunset-gold);
  border-color: var(--sunset-gold);
  color: white;
}

.step-content {
  padding-left: 20px;
}

.step-content h4 {
  margin: 0 0 5px 0;
  color: var(--midnight-navy);
  font-size: 1.1rem;
}

.step-content p {
  margin: 0;
  color: rgba(var(--midnight-navy), 0.7);
  font-size: 0.9rem;
  line-height: 1.5;
}

/* Destinations List */
.destinations-list {
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.destination-item {
  display: flex;
  align-items: center;
  gap: 15px;
  padding: 20px;
  background: var(--glass-bg);
  border-radius: 12px;
  transition: all var(--transition-fast);
}

.destination-item:hover {
  background: white;
  box-shadow: var(--shadow-sm);
  transform: translateX(5px);
}

.destination-flag {
  width: 50px;
  height: 50px;
  background: linear-gradient(135deg, var(--sunset-gold), var(--horizon-cyan));
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
}

.destination-flag i {
  color: white;
  font-size: 1.5rem;
}

.destination-info h4 {
  margin: 0 0 8px 0;
  color: var(--midnight-navy);
  font-size: 1rem;
}

.destination-meta {
  display: flex;
  gap: 20px;
  font-size: 0.85rem;
  color: rgba(var(--midnight-navy), 0.7);
}

.destination-meta i {
  color: var(--horizon-cyan);
  margin-right: 5px;
}

/* Benefits List */
.benefits-list {
  display: flex;
  flex-direction: column;
  gap: 25px;
}

.benefit-item {
  display: flex;
  align-items: flex-start;
  gap: 15px;
}

.benefit-icon {
  width: 50px;
  height: 50px;
  background: rgba(34, 166, 179, 0.1);
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  color: var(--horizon-cyan);
  font-size: 1.3rem;
}

.benefit-content h4 {
  margin: 0 0 5px 0;
  color: var(--midnight-navy);
  font-size: 1rem;
}

.benefit-content p {
  margin: 0;
  color: rgba(var(--midnight-navy), 0.7);
  font-size: 0.9rem;
  line-height: 1.5;
}

/* Contact Methods */
.contact-methods {
  display: flex;
  flex-direction: column;
  gap: 15px;
  margin-bottom: 25px;
}

.contact-method {
  display: flex;
  align-items: center;
  gap: 15px;
  padding: 15px;
  background: var(--glass-bg);
  border-radius: 12px;
  color: var(--midnight-navy);
  text-decoration: none;
  transition: all var(--transition-fast);
}

.contact-method:hover {
  background: rgba(34, 166, 179, 0.1);
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

.office-hours {
  padding-top: 20px;
  border-top: 1px solid var(--glass-border);
}

.office-hours h4 {
  display: flex;
  align-items: center;
  gap: 10px;
  color: var(--midnight-navy);
  margin-bottom: 10px;
  font-size: 1.1rem;
}

.office-hours h4 i {
  color: var(--horizon-cyan);
}

.office-hours p {
  margin: 0;
  color: rgba(var(--midnight-navy), 0.7);
  font-size: 0.95rem;
  line-height: 1.5;
}

/* Visa Types */
.visa-types-section {
  background: linear-gradient(135deg, #f8f9ff 0%, #eef2ff 100%);
}

.visa-types-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 30px;
}

.visa-type-card {
  background: white;
  border-radius: 20px;
  padding: 40px 30px;
  text-align: center;
  box-shadow: var(--shadow-md);
  transition: all var(--transition-normal);
}

.visa-type-card:hover {
  transform: translateY(-10px);
  box-shadow: var(--shadow-lg);
}

.visa-icon {
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

.visa-type-card h3 {
  margin: 0 0 15px 0;
  color: var(--deep-ocean-blue);
  font-size: 1.5rem;
}

.visa-type-card p {
  margin: 0 0 25px 0;
  color: rgba(var(--midnight-navy), 0.7);
  font-size: 0.95rem;
  line-height: 1.5;
}

.visa-features {
  list-style: none;
  padding: 0;
  margin: 0;
  text-align: left;
}

.visa-features li {
  display: flex;
  align-items: center;
  gap: 10px;
  padding: 8px 0;
  color: rgba(var(--midnight-navy), 0.8);
  font-size: 0.9rem;
}

.visa-features i {
  color: var(--horizon-cyan);
}

/* FAQ Section */
.faq-grid {
  max-width: 800px;
  margin: 0 auto;
}

.faq-item {
  margin-bottom: 15px;
  border: 1px solid var(--glass-border);
  border-radius: 15px;
  overflow: hidden;
}

.faq-question {
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%;
  padding: 25px 30px;
  background: white;
  border: none;
  text-align: left;
  font-size: 1.1rem;
  font-weight: 600;
  color: var(--midnight-navy);
  cursor: pointer;
  transition: all var(--transition-fast);
}

.faq-question:hover {
  background: var(--glass-bg);
}

.faq-question i {
  color: var(--horizon-cyan);
  transition: transform var(--transition-normal);
}

.faq-item.active .faq-question i {
  transform: rotate(180deg);
}

.faq-answer {
  max-height: 0;
  overflow: hidden;
  transition: max-height var(--transition-normal);
  background: var(--glass-bg);
}

.faq-item.active .faq-answer {
  max-height: 300px;
}

.faq-answer p {
  margin: 0;
  padding: 25px 30px;
  color: rgba(var(--midnight-navy), 0.7);
  font-size: 0.95rem;
  line-height: 1.6;
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
@media (max-width: 768px) {
  .visa-hero .hero-title {
    font-size: 2.5rem;
  }
  
  .form-header {
    padding: 30px 20px;
  }
  
  .form-section {
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
  .visa-hero .hero-title {
    font-size: 2rem;
  }
  
  .visa-hero .hero-stats {
    gap: 30px;
  }
  
  .visa-hero .stat-number {
    font-size: 2rem;
  }
  
  .form-actions {
    flex-direction: column;
  }
  
  .phone-input {
    flex-direction: column;
  }
  
  .country-code {
    width: 100%;
  }
}
</style>

<!-- JavaScript for Visa Page -->
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
  
  // Date pickers
  const dateInputs = document.querySelectorAll('.datepicker');
  dateInputs.forEach(input => {
    // Set max date to today for date of birth
    const today = new Date();
    const maxDate = today.toISOString().split('T')[0];
    
    // Set min date for passport expiry (today + 6 months)
    const minExpiry = new Date();
    minExpiry.setMonth(minExpiry.getMonth() + 6);
    const minExpiryDate = minExpiry.toISOString().split('T')[0];
    
    input.addEventListener('click', function() {
      this.type = 'date';
      
      if (this.name === 'date_of_birth') {
        this.max = maxDate;
      } else if (this.name === 'passport_expiry_date') {
        this.min = minExpiryDate;
      }
      
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
  
  // Document upload
  const uploadZone = document.getElementById('uploadZone');
  const fileInput = document.getElementById('fileInput');
  const fileList = document.getElementById('fileList');
  
  if (uploadZone && fileInput) {
    // Click to upload
    uploadZone.addEventListener('click', function() {
      fileInput.click();
    });
    
    // Drag and drop
    ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
      uploadZone.addEventListener(eventName, preventDefaults, false);
    });
    
    function preventDefaults(e) {
      e.preventDefault();
      e.stopPropagation();
    }
    
    ['dragenter', 'dragover'].forEach(eventName => {
      uploadZone.addEventListener(eventName, highlight, false);
    });
    
    ['dragleave', 'drop'].forEach(eventName => {
      uploadZone.addEventListener(eventName, unhighlight, false);
    });
    
    function highlight() {
      uploadZone.classList.add('dragover');
    }
    
    function unhighlight() {
      uploadZone.classList.remove('dragover');
    }
    
    uploadZone.addEventListener('drop', handleDrop, false);
    
    function handleDrop(e) {
      const dt = e.dataTransfer;
      const files = dt.files;
      handleFiles(files);
    }
    
    fileInput.addEventListener('change', function() {
      handleFiles(this.files);
    });
    
    function handleFiles(files) {
      [...files].forEach(file => {
        if (file.size > 5 * 1024 * 1024) {
          AlertManager.show(`File ${file.name} is too large (max 5MB)`, 'error');
          return;
        }
        
        if (!['application/pdf', 'image/jpeg', 'image/jpg', 'image/png'].includes(file.type)) {
          AlertManager.show(`File ${file.name} must be PDF, JPG, or PNG`, 'error');
          return;
        }
        
        addFileToList(file);
      });
    }
    
    function addFileToList(file) {
      const fileItem = document.createElement('div');
      fileItem.className = 'file-item';
      
      const fileIcon = document.createElement('div');
      fileIcon.className = 'file-icon';
      fileIcon.innerHTML = file.type === 'application/pdf' ? 
        '<i class="fas fa-file-pdf"></i>' : 
        '<i class="fas fa-file-image"></i>';
      
      const fileInfo = document.createElement('div');
      fileInfo.className = 'file-info';
      
      const fileName = document.createElement('span');
      fileName.className = 'file-name';
      fileName.textContent = file.name;
      
      const fileSize = document.createElement('span');
      fileSize.className = 'file-size';
      fileSize.textContent = formatFileSize(file.size);
      
      const fileRemove = document.createElement('button');
      fileRemove.className = 'file-remove';
      fileRemove.innerHTML = '<i class="fas fa-times"></i>';
      fileRemove.addEventListener('click', function() {
        fileItem.remove();
      });
      
      fileInfo.appendChild(fileName);
      fileInfo.appendChild(fileSize);
      
      fileItem.appendChild(fileIcon);
      fileItem.appendChild(fileInfo);
      fileItem.appendChild(fileRemove);
      
      fileList.appendChild(fileItem);
    }
    
    function formatFileSize(bytes) {
      if (bytes === 0) return '0 Bytes';
      const k = 1024;
      const sizes = ['Bytes', 'KB', 'MB'];
      const i = Math.floor(Math.log(bytes) / Math.log(k));
      return parseFloat((bytes / Math.pow(k, i)).toFixed(2)) + ' ' + sizes[i];
    }
  }
  
  // Form validation
  const visaForm = document.getElementById('visaInquiryForm');
  if (visaForm) {
    // Initialize form validator
    const formValidator = new FormValidator(visaForm);
    
    // Custom validation for passport number
    const passportInput = visaForm.querySelector('[name="passport_number"]');
    if (passportInput) {
      passportInput.addEventListener('blur', function() {
        const value = this.value.trim();
        const errorElement = visaForm.querySelector('[data-error="passport_number"]');
        const passportRegex = /^[A-Z0-9]{6,12}$/;
        
        if (!passportRegex.test(value)) {
          errorElement.textContent = 'Please enter a valid passport number (6-12 alphanumeric characters)';
          this.classList.add('error');
        } else {
          errorElement.textContent = '';
          this.classList.remove('error');
        }
      });
    }
    
    // Custom validation for date of birth
    const dobInput = visaForm.querySelector('[name="date_of_birth"]');
    if (dobInput) {
      dobInput.addEventListener('change', function() {
        const value = this.value;
        const errorElement = visaForm.querySelector('[data-error="date_of_birth"]');
        const dob = new Date(value);
        const today = new Date();
        const age = today.getFullYear() - dob.getFullYear();
        
        if (age < 1 || age > 120) {
          errorElement.textContent = 'Please enter a valid date of birth';
          this.classList.add('error');
        } else {
          errorElement.textContent = '';
          this.classList.remove('error');
        }
      });
    }
    
    // Form submission
    visaForm.addEventListener('submit', function(e) {
      e.preventDefault();
      
      // Validate all required fields
      let isValid = true;
      const requiredFields = [
        'name', 'phone', 'email', 'nationality',
        'passport_number', 'date_of_birth', 'passport_issue_date',
        'passport_expiry_date', 'destination', 'visa_type',
        'travel_date', 'purpose', 'terms'
      ];
      
      requiredFields.forEach(field => {
        const input = visaForm.querySelector(`[name="${field}"]`);
        const errorElement = visaForm.querySelector(`[data-error="${field}"]`);
        
        if (input) {
          if (input.type === 'checkbox' && !input.checked) {
            errorElement.textContent = 'This field is required';
            isValid = false;
          } else if (input.hasAttribute('required') && !input.value.trim()) {
            errorElement.textContent = 'This field is required';
            input.classList.add('error');
            isValid = false;
          } else {
            errorElement.textContent = '';
            input.classList.remove('error');
          }
        }
      });
      
      if (isValid) {
        // Show loading state
        const submitBtn = visaForm.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Submitting...';
        submitBtn.disabled = true;
        
        // Simulate form submission
        setTimeout(() => {
          AlertManager.show('Visa inquiry submitted successfully! Our expert will contact you within 2 hours.', 'success');
          submitBtn.innerHTML = originalText;
          submitBtn.disabled = false;
          visaForm.reset();
          
          // Reset traveler counter
          if (travelerInput) travelerInput.value = '1';
          
          // Clear file list
          if (fileList) fileList.innerHTML = '';
        }, 2000);
      } else {
        AlertManager.show('Please fill in all required fields correctly', 'error');
      }
    });
  }
  
  // Schedule consultation
  const scheduleBtn = document.getElementById('scheduleConsultation');
  if (scheduleBtn) {
    scheduleBtn.addEventListener('click', function() {
      AlertManager.show('Redirecting to consultation booking...', 'info');
      setTimeout(() => {
        window.location.href = 'index.php?page=contact';
      }, 1000);
    });
  }
  
  // WhatsApp button
  const whatsappBtn = document.getElementById('whatsappVisa');
  if (whatsappBtn) {
    whatsappBtn.addEventListener('click', function() {
      const whatsappMessage = "Hi, I'm interested in your visa services. Can you provide more information?";
      const whatsappURL = `https://wa.me/97145565258?text=${encodeURIComponent(whatsappMessage)}`;
      window.open(whatsappURL, '_blank');
    });
  }
  
  // FAQ accordion
  const faqQuestions = document.querySelectorAll('.faq-question');
  faqQuestions.forEach(question => {
    question.addEventListener('click', function() {
      const faqItem = this.parentElement;
      faqItem.classList.toggle('active');
    });
  });
  
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