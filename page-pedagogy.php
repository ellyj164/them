<?php
/**
 * Template Name: Pedagogical Information
 * Template for Pedagogical Information page
 *
 * @package French_Practice_Hub
 */

get_header();
?>

<main>
    <?php
    while ( have_posts() ) :
        the_post();
        
        if ( fph_is_elementor_page() ) {
            // Page is built with Elementor, show Elementor content
            the_content();
        } else {
            // Default theme content
            ?>
            <section class="page-hero">
                <div class="page-hero-content container">
                    <h1>Pedagogical Information</h1>
                    <p>Our approach to effective French language learning</p>
                </div>
            </section>
            
            <div class="content-section">
                <div class="container">
                    <div class="section-header">
                        <h2 class="section-title">Our Pedagogical Approach</h2>
                        <p class="section-subtitle">Active, communicative and learner-centered—these are the pillars of our teaching philosophy</p>
                    </div>
                    
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 30px; margin-top: 40px;">
                        <div class="icon-box">
                            <div class="icon-box-icon">📋</div>
                            <h3 class="icon-box-title">Task-Based Learning</h3>
                            <p class="icon-box-text">Students learn by completing realistic tasks and projects that simulate real-world language use.</p>
                        </div>
                        
                        <div class="icon-box">
                            <div class="icon-box-icon">💬</div>
                            <h3 class="icon-box-title">Communicative Approach</h3>
                            <p class="icon-box-text">We prioritize interaction and dialogue, encouraging learners to practice speaking and listening from the very beginning.</p>
                        </div>
                        
                        <div class="icon-box">
                            <div class="icon-box-icon">🏗️</div>
                            <h3 class="icon-box-title">Scaffolding</h3>
                            <p class="icon-box-text">We build on your existing knowledge, gradually introducing new concepts and skills in a structured, supportive manner.</p>
                        </div>
                        
                        <div class="icon-box">
                            <div class="icon-box-icon">🎨</div>
                            <h3 class="icon-box-title">Multimodal Resources</h3>
                            <p class="icon-box-text">We integrate visual, auditory, and kinesthetic learning tools to accommodate different learning preferences.</p>
                        </div>
                        
                        <div class="icon-box">
                            <div class="icon-box-icon">🌍</div>
                            <h3 class="icon-box-title">Cultural Immersion</h3>
                            <p class="icon-box-text">Understanding French culture, traditions, and social norms is an integral part of our curriculum.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="content-section">
                <div class="container">
                    <div class="section-header">
                        <h2 class="section-title">Learning French in the Digital Age</h2>
                        <p class="section-subtitle">French Practice Hub fully integrates digital technology to enhance your learning experience</p>
                    </div>
                    <ul class="feature-list">
                        <li class="feature-list-item">
                            <span class="feature-list-icon">🎮</span>
                            <div>
                                <strong>Interactive Exercises:</strong> Gamified activities and quizzes that make practice engaging and provide instant feedback.
                            </div>
                        </li>
                        <li class="feature-list-item">
                            <span class="feature-list-icon">🎥</span>
                            <div>
                                <strong>Video Dialogues:</strong> Authentic conversational videos with subtitles and comprehension exercises to improve listening skills.
                            </div>
                        </li>
                        <li class="feature-list-item">
                            <span class="feature-list-icon">👨‍🏫</span>
                            <div>
                                <strong>Online Tutoring:</strong> Live, one-on-one or group sessions with experienced instructors via video conferencing.
                            </div>
                        </li>
                        <li class="feature-list-item">
                            <span class="feature-list-icon">📱</span>
                            <div>
                                <strong>Mobile-Friendly:</strong> Access your courses and materials anytime, anywhere, on any device.
                            </div>
                        </li>
                        <li class="feature-list-item">
                            <span class="feature-list-icon">📊</span>
                            <div>
                                <strong>Progress Tracking:</strong> Monitor your improvement with detailed analytics and personalized recommendations.
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="content-section">
                <div class="container">
                    <div class="section-header">
                        <h2 class="section-title">CEFR / CECRL – Complete French Learning Journey</h2>
                        <p class="section-subtitle">The Common European Framework of Reference for Languages (CEFR) provides a standardized description of language ability</p>
                    </div>
            <div class="table-container">
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th>Level</th>
                            <th>Cumulative Hours</th>
                            <th>Communicative Objectives</th>
                            <th>Linguistic Objectives</th>
                            <th>Socio-Cultural Objectives</th>
                            <th>Official Exams</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>A1.1</td>
                            <td>60-80 hours</td>
                            <td>Introduce yourself, ask and answer simple questions about personal details</td>
                            <td>Present tense, basic vocabulary (greetings, numbers, colors)</td>
                            <td>Everyday life, family, school</td>
                            <td>DELF Prim A1.1</td>
                        </tr>
                        <tr>
                            <td>A1</td>
                            <td>100-120 hours</td>
                            <td>Interact in simple situations, express basic needs and preferences</td>
                            <td>Articles, adjectives, basic verb conjugations</td>
                            <td>Daily routines, shopping, hobbies</td>
                            <td>DELF A1, DELF Prim A1</td>
                        </tr>
                        <tr>
                            <td>A2</td>
                            <td>180-200 hours</td>
                            <td>Describe experiences, express opinions, handle routine tasks</td>
                            <td>Past tenses (passé composé, imparfait), future tense</td>
                            <td>Travel, work, culture, past experiences</td>
                            <td>DELF A2, DELF Prim A2</td>
                        </tr>
                        <tr>
                            <td>B1</td>
                            <td>350-400 hours</td>
                            <td>Discuss familiar topics, narrate events, explain viewpoints</td>
                            <td>Subjunctive mood, relative pronouns, complex structures</td>
                            <td>Current events, media, personal aspirations</td>
                            <td>DELF B1, TCF B1, TEF B1</td>
                        </tr>
                        <tr>
                            <td>B2</td>
                            <td>550-650 hours</td>
                            <td>Argue effectively, understand complex texts, engage in debates</td>
                            <td>Advanced grammar, idiomatic expressions, nuanced vocabulary</td>
                            <td>Society, politics, arts, professional contexts</td>
                            <td>DELF B2, TCF B2, TEF B2</td>
                        </tr>
                        <tr>
                            <td>C1</td>
                            <td>800-950 hours</td>
                            <td>Express ideas fluently and spontaneously, understand implicit meaning</td>
                            <td>Sophisticated structures, stylistic devices, formal/informal registers</td>
                            <td>Academic and professional domains, abstract concepts</td>
                            <td>DALF C1, TCF C1, TEF C1</td>
                        </tr>
                        <tr>
                            <td>C2</td>
                            <td>1000+ hours</td>
                            <td>Communicate with precision and subtlety in all contexts</td>
                            <td>Mastery of the language, including rare and specialized vocabulary</td>
                            <td>All cultural and professional contexts at an expert level</td>
                            <td>DALF C2, TCF C2, TEF C2</td>
                        </tr>
                    </tbody>
                </table>
            </div>
                </div>
            </div>
            
            <div class="content-section">
                <div class="container">
                    <div class="section-header">
                        <h2 class="section-title">TCF Canada – C2 Level Requirements</h2>
                    </div>
            <div class="table-container">
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th>Competence</th>
                            <th>Evaluation Criteria</th>
                            <th>Weight</th>
                            <th>Candidate Must Demonstrate</th>
                            <th>Examples</th>
                            <th>Notes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Oral Expression</td>
                            <td>Fluency, coherence, lexical range, grammatical accuracy, pronunciation</td>
                            <td>25%</td>
                            <td>Ability to speak spontaneously and fluently on complex topics, adapt register to context, use sophisticated vocabulary and structures with precision</td>
                            <td>Present a detailed argument on a controversial topic, describe abstract concepts, participate in professional discussions</td>
                            <td>Examiners assess naturalness of speech, minimal hesitation, and effective communication strategies</td>
                        </tr>
                        <tr>
                            <td>Written Expression</td>
                            <td>Task completion, organization, lexical range, grammatical accuracy, spelling and punctuation</td>
                            <td>25%</td>
                            <td>Ability to produce clear, well-structured texts on complex subjects, showing controlled use of organizational patterns and cohesive devices</td>
                            <td>Write a formal letter, compose an essay analyzing a social issue, draft a professional report</td>
                            <td>Attention to text type conventions, argumentation, and stylistic appropriateness is crucial</td>
                        </tr>
                    </tbody>
                </table>
            </div>
                </div>
            </div>
            
            <div class="content-section">
                <div class="container">
                    <div class="section-header">
                        <h2 class="section-title">TEF Canada – C2 Level Requirements</h2>
                    </div>
            <div class="table-container">
                <table class="responsive-table">
                    <thead>
                        <tr>
                            <th>Competence</th>
                            <th>Evaluation Criteria</th>
                            <th>Weight</th>
                            <th>Candidate Must Demonstrate</th>
                            <th>Examples</th>
                            <th>Notes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Oral Expression</td>
                            <td>Communication effectiveness, discourse organization, lexical richness, syntactic complexity, phonological control</td>
                            <td>25%</td>
                            <td>Ability to express oneself precisely and confidently in all situations, including formal presentations and debates, with near-native fluency</td>
                            <td>Defend a thesis, conduct a negotiation, give an academic presentation, participate in expert discussions</td>
                            <td>Assessed on clarity, persuasiveness, and ability to handle unexpected questions or challenges</td>
                        </tr>
                        <tr>
                            <td>Written Expression</td>
                            <td>Content relevance, textual organization, lexical variety, morphosyntactic accuracy, orthographic correctness</td>
                            <td>25%</td>
                            <td>Ability to write clear, detailed, and well-structured texts on complex topics with excellent control of grammar and style</td>
                            <td>Write an argumentative essay, compose a critical review, draft a business proposal, create a technical report</td>
                            <td>Emphasis on coherence, cohesion, and adaptation to target audience and purpose</td>
                        </tr>
                    </tbody>
                </table>
            </div>
                </div>
            </div>
            <?php
        }
    endwhile;
    ?>
</main>

<?php
get_footer();
