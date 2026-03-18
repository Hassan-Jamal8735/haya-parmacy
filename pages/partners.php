<?php
// pages/partners.php — Full Figma Rebuild (node 279-3835)
require_once __DIR__ . '/../config/config.php';
session_start();

$pageTitle = 'بطاقة الأوائل - صيدلية حيا';
$hideStandardHeader = true; 
include __DIR__ . '/../includes/header.php';
?>

<!-- Partners Top Bar (Figma Style) -->
<header class="haya-top-bar">
    <div class="haya-top-container">
        <!-- Left Part (Spacing) -->
        <div class="haya-top-left-spacer"></div>
        
        <!-- Center: Nav -->
        <nav class="haya-main-nav">
            <a href="<?= SITE_URL ?>/pages/pioneers.php">الأوائل</a>
            <a href="<?= SITE_URL ?>/pages/partners.php" class="active">الشركاء</a>
            <a href="<?= SITE_URL ?>/pages/questionnaire.php">الفحص الصحي</a>
            <a href="<?= SITE_URL ?>/pages/feedback.php">التقييمات</a>
        </nav>

        <!-- Right: Logo -->
        <div class="haya-main-logo">
            <img src="<?= SITE_URL ?>/assets/images/haya-logo.png" alt="Haya Logo">
        </div>
    </div>
</header>

<div class="haya-partners-page">
    
    <!-- Hero Section -->
    <section class="haya-partners-hero">
        <div class="haya-hero-bg-pattern"></div>
        <div class="haya-hero-container">
            <!-- Left: Content -->
            <div class="haya-hero-content">
                <div class="haya-hero-logo">
                    <img src="<?= SITE_URL ?>/assets/images/haya-logo-wide-white.png" alt="Haya Logo" height="60">
                </div>
                <h1 class="haya-hero-title">احصل على بطاقة الأوائل من صيدلية حيا</h1>
                <p class="haya-hero-subtitle">
                    كن من أوائل عملاء صيدلية حيا واحصل على بطاقة الأوائل التي صممت لتمنحك مزايا حصرية وعروضاً خاصة.
                    <br><br>
                    تقديراً لثقتك ووجودك معنا في بداية رحلتنا، ندعوك للتسجيل الآن والانضمام إلى قائمة الانتظار للاستفادة من الخصومات والخدمات المميزة عند افتتاح الصيدلية.
                </p>
                <a href="#" class="haya-btn-gold open-reg-modal">سجل للحصول على البطاقة</a>
            </div>
            <!-- Right: Visual -->
            <div class="haya-hero-visual">
                <img src="<?= SITE_URL ?>/assets/images/Group 1000004111.svg" alt="Health Symbol" class="haya-hero-health-symbol">
                <img src="<?= SITE_URL ?>/assets/images/loyalty-cards.png" alt="Pioneers Cards" class="pioneers-cards-visual">
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="haya-partners-features">
        <div class="container">
            <h2 class="haya-section-title">ميزات "الأوائل"</h2>
            <div class="haya-features-grid">
                <!-- Feature 1 -->
                <div class="haya-feature-card">
                    <span class="haya-feature-text">فحص مجاني شهري</span>
                    <div class="haya-feature-icon-circle">
                        <i class="fas fa-chevron-left"></i>
                    </div>
                </div>
                <!-- Feature 2 -->
                <div class="haya-feature-card">
                    <span class="haya-feature-text">أولوية في قوائم الانتظار</span>
                    <div class="haya-feature-icon-circle">
                        <i class="fas fa-chevron-left"></i>
                    </div>
                </div>
                <!-- Feature 3 -->
                <div class="haya-feature-card">
                    <span class="haya-feature-text">عروض وخصومات حصرية</span>
                    <div class="haya-feature-icon-circle">
                        <i class="fas fa-chevron-left"></i>
                    </div>
                </div>
                <!-- Feature 4 -->
                <div class="haya-feature-card">
                    <span class="haya-feature-text">دعم واستشارات مخصصة</span>
                    <div class="haya-feature-icon-circle">
                        <i class="fas fa-chevron-left"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Terms & Conditions Section -->
    <section class="haya-partners-terms">
        <div class="haya-terms-container">
            <h2 class="haya-terms-title">الشروط والأحكام الخاصة بعضوية الأوائل</h2>
            
            <!-- Point 1 -->
            <div class="haya-term-item">
                <div class="haya-term-header">
                    <div class="haya-term-number">1</div>
                    <div class="haya-term-subject">الصلاحية والتفعيل (غير قابلة للتجديد)</div>
                </div>
                <div class="haya-term-content">
                    <p>تسري صلاحية بطاقة العضوية لمدة ستة (6) أشهر فقط من تاريخ التفعيل.</p>
                    <p>هذه العضوية مخصصة لفترة محددة وغير قابلة للتجديد بنفس المزايا المجانية الحالية عند انتهائها. بعد انقضاء الـ 6 أشهر، يمكن للعضو التقديم على باقات العضوية الجديدة المتوفرة في الصيدلية في حينه.</p>
                </div>
            </div>

            <!-- Point 2 -->
            <div class="haya-term-item">
                <div class="haya-term-header">
                    <div class="haya-term-number">2</div>
                    <div class="haya-term-subject">الفحوصات والاستشارات المجانية</div>
                </div>
                <div class="haya-term-content">
                    <p>يحق للعضو أو أحد أفراد عائلته من حاملي البطاقة الحصول على فحص مجاني واحد شهرياً.</p>
                    <p>يختار العضو خدمة واحدة فقط من بين (فحص السكر / فحص ضغط الدم / فحص الوزن والدهون).</p>
                    <p>شرط عدم التراكم: تسقط الاستفادة من الفحص الشهري في حال انقضاء الشهر دون استخدامه، ولا يحق للعضو المطالبة بالخدمات غير المستخدمة أو تدويرها لشهر آخر.</p>
                </div>
            </div>

            <!-- Point 3 -->
            <div class="haya-term-item">
                <div class="haya-term-header">
                    <div class="haya-term-number">3</div>
                    <div class="haya-term-subject">السياسة السعرية والخصومات</div>
                </div>
                <div class="haya-term-content">
                    <p>الخصومات الممنوحة لحاملي البطاقة تشمل منتجات العناية بالبشرة والمكملات الغذائية المختارة.</p>
                    <p>لا تسري الخصومات على الأدوية (وفقاً لتعليمات نقابة الصيادلة والقوانين المحلية النافذة).</p>
                    <p>لا يمكن دمج خصومات البطاقة مع أي عروض ترويجية أخرى أو خصومات موسمية تعلن عنها الصيدلية.</p>
                </div>
            </div>
        </div>
    </section>

</div>

<!-- Partners Registration Modal -->
<div id="regModal" class="reg-modal-overlay">
    <div class="reg-modal-content" style="background: var(--haya-white); border-radius: var(--radius-lg); padding: 4rem;">
        <button id="modalClose" class="modal-close-btn" aria-label="Close">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
        </button>

        <div id="modalFormWrap">
            <h2 style="color: var(--haya-green); font-weight: 900; margin-bottom: 2rem; text-align: center;">سجل للحصول على بطاقة الأوائل</h2>
            <form id="regForm" method="POST" novalidate>
                <div class="modal-form-group">
                    <label class="modal-label">الاسم الكامل</label>
                    <input type="text" id="reg_name" name="reg_name" class="modal-input" placeholder="مثال: محمد علي" required style="border-radius: 15px; border: 1px solid var(--haya-beige); padding: 1.2rem;">
                </div>

                <div class="modal-form-group">
                    <label class="modal-label">رقم الهاتف</label>
                    <input type="tel" id="reg_mobile" name="reg_mobile" class="modal-input" placeholder="07xxxxxxxx" required style="border-radius: 15px; border: 1px solid var(--haya-beige); padding: 1.2rem;">
                </div>

                <div class="modal-form-group">
                    <label class="modal-label">الجنس</label>
                    <div class="gender-options" style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                        <button type="button" class="option-btn-choice" data-target="reg_gender" data-value="male" style="background: var(--haya-gray); border: none; padding: 1rem; border-radius: 12px; cursor: pointer; font-weight: 700;">ذكر</button>
                        <button type="button" class="option-btn-choice" data-target="reg_gender" data-value="female" style="background: var(--haya-gray); border: none; padding: 1rem; border-radius: 12px; cursor: pointer; font-weight: 700;">أنثى</button>
                    </div>
                    <input type="hidden" id="reg_gender" name="reg_gender" required>
                </div>

                <div class="modal-form-group">
                    <label class="modal-label">تاريخ الميلاد</label>
                    <input type="date" id="reg_dob" name="reg_dob" class="modal-input" required style="border-radius: 15px; border: 1px solid var(--haya-beige); padding: 1.2rem;">
                </div>

                <button type="submit" class="haya-btn-gold form-submit" style="width: 100%; margin-top: 2rem;">إرسال الطلب</button>
            </form>
        </div>

        <div id="modalSuccess" class="success-message-wrap" style="display: none; text-align: center;">
            <div style="font-size: 4rem; margin-bottom: 1.5rem;">✨</div>
            <h2 style="color: var(--haya-green); font-weight: 900; font-size: 2.22rem;">تم استلام طلبك!</h2>
            <p style="color: #666; font-size: 1.2rem; margin-top: 1rem;">سنقوم بالتواصل معك قريباً لتسليم البطاقة.</p>
            <button onclick="location.reload()" class="haya-btn-gold" style="margin-top: 2rem;">حسناً</button>
        </div>
    </div>
</div>

<script src="<?= SITE_URL ?>/assets/js/partners.js"></script>
</body>
</html>
