<?php
/**
 * Template Name: Component Demo
 * Description: Demo page showcasing all new e-learning UI components
 *
 * @package French_Practice_Hub
 */

get_header();
?>

<main class="content-section">
    <div class="container" style="max-width: 1200px;">
        
        <!-- Page Header -->
        <div class="section-header" style="margin-bottom: 60px;">
            <h1 class="section-title">E-Learning UI Components</h1>
            <p class="section-subtitle">Modern, professional components for an enhanced learning experience</p>
        </div>

        <!-- Progress Bars Section -->
        <section style="margin-bottom: 60px;">
            <h2 style="margin-bottom: 30px; color: var(--primary-color);">Progress Indicators</h2>
            
            <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 40px; margin-bottom: 40px;">
                <div>
                    <div class="progress-wrapper">
                        <div class="progress-header">
                            <span class="progress-label">Course Completion</span>
                            <span class="progress-percentage">75%</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-bar-fill" style="width: 75%;"></div>
                        </div>
                    </div>
                    
                    <div class="progress-wrapper">
                        <div class="progress-header">
                            <span class="progress-label">Quiz Score</span>
                            <span class="progress-percentage">90%</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-bar-fill" style="width: 90%;"></div>
                        </div>
                    </div>
                    
                    <div class="progress-wrapper">
                        <div class="progress-header">
                            <span class="progress-label">Lesson Progress</span>
                            <span class="progress-percentage">45%</span>
                        </div>
                        <div class="progress-bar">
                            <div class="progress-bar-fill" style="width: 45%;"></div>
                        </div>
                    </div>
                </div>
                
                <div style="display: flex; justify-content: center; align-items: center;">
                    <div class="circular-progress" style="--progress: 75%;">
                        <span class="circular-progress-value">75%</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- Status Badges Section -->
        <section style="margin-bottom: 60px;">
            <h2 style="margin-bottom: 30px; color: var(--primary-color);">Status Badges & Icons</h2>
            
            <div style="display: flex; gap: 16px; flex-wrap: wrap; margin-bottom: 24px;">
                <span class="status-badge status-badge-completed">
                    <span class="status-icon status-icon-completed"></span>
                    Completed
                </span>
                <span class="status-badge status-badge-in-progress">
                    <span class="status-icon status-icon-in-progress"></span>
                    In Progress
                </span>
                <span class="status-badge status-badge-not-started">
                    Not Started
                </span>
                <span class="status-badge status-badge-locked">
                    <span class="status-icon status-icon-locked"></span>
                    Locked
                </span>
            </div>
        </section>

        <!-- Buttons Section -->
        <section style="margin-bottom: 60px;">
            <h2 style="margin-bottom: 30px; color: var(--primary-color);">Modern Buttons</h2>
            
            <div style="display: flex; gap: 16px; flex-wrap: wrap;">
                <button class="btn btn-primary">Enroll Now</button>
                <button class="btn btn-secondary">Learn More</button>
                <button class="btn btn-outline">Start Free Trial</button>
                <button class="btn btn-primary btn-sm">Small Button</button>
                <button class="btn btn-primary btn-lg">Large Button</button>
            </div>
        </section>

        <!-- Course Cards Section -->
        <section style="margin-bottom: 60px;">
            <h2 style="margin-bottom: 30px; color: var(--primary-color);">Course Cards</h2>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px;">
                <a href="#" class="course-card">
                    <div class="course-thumbnail">
                        <img src="https://images.unsplash.com/photo-1546410531-bb4caa6b424d?w=600&h=400&fit=crop" alt="French Course">
                        <span class="course-badge">
                            <span class="badge badge-new">New</span>
                        </span>
                    </div>
                    <div class="course-body">
                        <h3 class="course-title">French for Beginners A1</h3>
                        <div class="course-instructor">👤 Marie Dupont</div>
                        <div class="course-meta">
                            <span class="course-meta-item">📚 24 Lessons</span>
                            <span class="course-meta-item">⏱️ 12 Hours</span>
                        </div>
                        <div class="progress-wrapper">
                            <div class="progress-bar">
                                <div class="progress-bar-fill" style="width: 60%;"></div>
                            </div>
                        </div>
                        <div class="course-footer">
                            <div class="course-price">€49.99</div>
                            <button class="course-cta">Continue</button>
                        </div>
                    </div>
                </a>
                
                <a href="#" class="course-card">
                    <div class="course-thumbnail">
                        <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?w=600&h=400&fit=crop" alt="DELF Exam">
                        <span class="course-badge">
                            <span class="badge badge-popular">Popular</span>
                        </span>
                    </div>
                    <div class="course-body">
                        <h3 class="course-title">DELF B2 Exam Preparation</h3>
                        <div class="course-instructor">👤 Jean Martin</div>
                        <div class="course-meta">
                            <span class="course-meta-item">📚 36 Lessons</span>
                            <span class="course-meta-item">⏱️ 20 Hours</span>
                        </div>
                        <div class="progress-wrapper">
                            <div class="progress-bar">
                                <div class="progress-bar-fill" style="width: 0%;"></div>
                            </div>
                        </div>
                        <div class="course-footer">
                            <div class="course-price">€79.99</div>
                            <button class="course-cta">Enroll</button>
                        </div>
                    </div>
                </a>
            </div>
        </section>

        <!-- Tabs Section -->
        <section style="margin-bottom: 60px;">
            <h2 style="margin-bottom: 30px; color: var(--primary-color);">Modern Tabs</h2>
            
            <div class="tabs">
                <ul class="tabs-nav">
                    <li class="tab-item active">Overview</li>
                    <li class="tab-item">Curriculum</li>
                    <li class="tab-item">Reviews</li>
                    <li class="tab-item">Instructor</li>
                </ul>
            </div>
            <div class="tab-content active">
                <p style="color: var(--text-secondary);">This is the overview content. The modern tab design provides clear visual feedback and smooth transitions.</p>
            </div>
        </section>

        <!-- Lesson Navigation Section -->
        <section style="margin-bottom: 60px;">
            <h2 style="margin-bottom: 30px; color: var(--primary-color);">Lesson Navigation</h2>
            
            <div class="lesson-nav">
                <div class="lesson-nav-header">
                    <h3 class="lesson-nav-title">Course Curriculum</h3>
                    <span class="status-badge status-badge-in-progress">3/5 Complete</span>
                </div>
                <ul class="lesson-list">
                    <li class="lesson-item completed">
                        <div class="lesson-number">1</div>
                        <div class="lesson-details">
                            <div class="lesson-title">Introduction to French</div>
                            <div class="lesson-meta">
                                <span>📹 Video</span>
                                <span>⏱️ 15 min</span>
                            </div>
                        </div>
                        <span class="status-icon status-icon-completed"></span>
                    </li>
                    <li class="lesson-item completed">
                        <div class="lesson-number">2</div>
                        <div class="lesson-details">
                            <div class="lesson-title">Basic Greetings</div>
                            <div class="lesson-meta">
                                <span>📹 Video</span>
                                <span>⏱️ 20 min</span>
                            </div>
                        </div>
                        <span class="status-icon status-icon-completed"></span>
                    </li>
                    <li class="lesson-item active">
                        <div class="lesson-number">3</div>
                        <div class="lesson-details">
                            <div class="lesson-title">Numbers and Counting</div>
                            <div class="lesson-meta">
                                <span>📹 Video</span>
                                <span>⏱️ 18 min</span>
                            </div>
                        </div>
                        <span class="status-icon status-icon-in-progress"></span>
                    </li>
                    <li class="lesson-item">
                        <div class="lesson-number">4</div>
                        <div class="lesson-details">
                            <div class="lesson-title">Common Phrases</div>
                            <div class="lesson-meta">
                                <span>📹 Video</span>
                                <span>⏱️ 25 min</span>
                            </div>
                        </div>
                    </li>
                    <li class="lesson-item locked">
                        <div class="lesson-number">5</div>
                        <div class="lesson-details">
                            <div class="lesson-title">Quiz: Module 1</div>
                            <div class="lesson-meta">
                                <span>📝 Quiz</span>
                                <span>⏱️ 10 min</span>
                            </div>
                        </div>
                        <span class="status-icon status-icon-locked"></span>
                    </li>
                </ul>
            </div>
        </section>

        <!-- Learning Path Section -->
        <section style="margin-bottom: 60px;">
            <h2 style="margin-bottom: 30px; color: var(--primary-color);">Learning Path</h2>
            
            <div class="learning-path">
                <div class="path-milestone completed">
                    <div class="milestone-icon">✓</div>
                    <div class="milestone-content">
                        <div class="milestone-title">Introduction Module</div>
                        <div class="milestone-description">Learn the basics of French pronunciation and alphabet</div>
                        <div style="margin-top: 12px;">
                            <span class="badge badge-success">Completed</span>
                        </div>
                    </div>
                </div>
                
                <div class="path-milestone active">
                    <div class="milestone-icon">2</div>
                    <div class="milestone-content">
                        <div class="milestone-title">Beginner Conversations</div>
                        <div class="milestone-description">Master everyday conversations and common phrases</div>
                        <div style="margin-top: 12px;">
                            <div class="progress-wrapper">
                                <div class="progress-bar">
                                    <div class="progress-bar-fill" style="width: 45%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="path-milestone">
                    <div class="milestone-icon">3</div>
                    <div class="milestone-content">
                        <div class="milestone-title">Grammar Fundamentals</div>
                        <div class="milestone-description">Understand essential French grammar rules</div>
                        <div style="margin-top: 12px;">
                            <span class="badge badge-free">Locked</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>

<style>
/* Add some demo-specific styles */
.badge {
    display: inline-block;
    padding: 4px 12px;
    border-radius: var(--radius-sm);
    font-size: 0.8125rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.badge-primary {
    background: var(--primary-color);
    color: var(--white-color);
}

.badge-success {
    background: var(--success-green);
    color: var(--white-color);
}

.badge-new {
    background: var(--magenta-accent);
    color: var(--white-color);
}

.badge-popular {
    background: var(--gradient-primary);
    color: var(--white-color);
}

.badge-free {
    background: #17a2b8;
    color: var(--white-color);
}
</style>

<?php
get_footer();
