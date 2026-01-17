<?php
/**
 * Template Name: Book Session
 * Description: Professional booking calendar page for session scheduling
 *
 * @package French_Practice_Hub
 */

get_header();
?>

<main class="booking-page">
    <section class="booking-hero">
        <div class="container">
            <h1><?php esc_html_e( 'Book Your French Learning Session', 'french-practice-hub' ); ?></h1>
            <p><?php esc_html_e( 'Choose your preferred time slot and start your French learning journey', 'french-practice-hub' ); ?></p>
        </div>
    </section>

    <section class="booking-calendar-section">
        <div class="container">
            <div class="booking-info">
                <p><strong><?php esc_html_e( 'Timezone:', 'french-practice-hub' ); ?></strong> <?php esc_html_e( 'Kigali Time (CAT - Central Africa Time)', 'french-practice-hub' ); ?></p>
                <p><?php esc_html_e( 'Click on a green slot to book your session. All times are shown in Kigali Time.', 'french-practice-hub' ); ?></p>
            </div>

            <div class="booking-calendar-wrapper">
                <table class="booking-calendar">
                    <thead>
                        <tr>
                            <th><?php esc_html_e( 'Kigali Time', 'french-practice-hub' ); ?></th>
                            <th><?php esc_html_e( 'Monday', 'french-practice-hub' ); ?></th>
                            <th><?php esc_html_e( 'Tuesday', 'french-practice-hub' ); ?></th>
                            <th><?php esc_html_e( 'Wednesday', 'french-practice-hub' ); ?></th>
                            <th><?php esc_html_e( 'Thursday', 'french-practice-hub' ); ?></th>
                            <th><?php esc_html_e( 'Friday', 'french-practice-hub' ); ?></th>
                            <th><?php esc_html_e( 'Saturday', 'french-practice-hub' ); ?></th>
                            <th><?php esc_html_e( 'Sunday', 'french-practice-hub' ); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Define time slots based on the problem statement
                        $time_slots = array(
                            array( 'time' => 'Kid 06:00-07:30', 'type' => 'kids', 'days' => array( 0, 0, 0, 0, 0, 1, 1 ) ),
                            array( 'time' => 'Kid 06:30-08:00', 'type' => 'kids', 'days' => array( 0, 0, 0, 0, 0, 1, 1 ) ),
                            array( 'time' => 'Adult 05:30-07:30', 'type' => 'adults', 'days' => array( 0, 0, 0, 0, 0, 1, 1 ) ),
                            array( 'time' => 'Kids 08:00-09:30', 'type' => 'kids', 'days' => array( 0, 0, 0, 0, 0, 1, 1 ) ),
                            array( 'time' => 'Adults 08:00-10:00', 'type' => 'adults', 'days' => array( 0, 0, 0, 0, 0, 1, 1 ) ),
                            array( 'time' => 'Kids 11:00-12:30', 'type' => 'kids', 'days' => array( 0, 0, 0, 0, 0, 0, 0 ) ),
                            array( 'time' => 'Adults 11:00-13:00', 'type' => 'adults', 'days' => array( 0, 0, 0, 0, 0, 0, 0 ) ),
                            array( 'time' => 'Kids 14:00-15:30', 'type' => 'kids', 'days' => array( 0, 0, 0, 0, 0, 1, 1 ) ),
                            array( 'time' => 'Adults 14:00-16:00', 'type' => 'adults', 'days' => array( 0, 0, 0, 0, 0, 1, 1 ) ),
                            array( 'time' => 'PAUSE 16:00-17:00', 'type' => 'pause', 'days' => array( 1, 1, 1, 1, 1, 1, 1 ) ),
                            array( 'time' => 'Kids 17:00-18:30', 'type' => 'kids', 'days' => array( 0, 0, 0, 0, 0, 0, 0 ) ),
                            array( 'time' => 'Adults 17:00-19:00', 'type' => 'adults', 'days' => array( 0, 0, 0, 0, 0, 0, 0 ) ),
                            array( 'time' => 'Kids 19:15-20:45', 'type' => 'kids', 'days' => array( 1, 1, 1, 1, 1, 1, 1 ) ),
                            array( 'time' => 'Kids 19:30-21:00', 'type' => 'kids', 'days' => array( 1, 1, 1, 1, 1, 1, 1 ) ),
                            array( 'time' => 'Adults 19:30-21:30', 'type' => 'adults', 'days' => array( 1, 1, 1, 1, 1, 1, 1 ) ),
                        );

                        // Get booked slots from database
                        $booked_slots = fph_get_booked_slots();

                        foreach ( $time_slots as $slot ) :
                            $slot_type = $slot['type'];
                            $slot_time = $slot['time'];
                            ?>
                            <tr>
                                <td class="time-label"><?php echo esc_html( $slot_time ); ?></td>
                                <?php
                                for ( $day = 0; $day < 7; $day++ ) :
                                    $is_available = $slot['days'][ $day ];
                                    $day_name = array( 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday' )[ $day ];
                                    
                                    // Check if slot is booked
                                    $slot_key = $day_name . '_' . sanitize_title( $slot_time );
                                    $is_booked = isset( $booked_slots[ $slot_key ] ) && $booked_slots[ $slot_key ];
                                    
                                    if ( $slot_type === 'pause' ) :
                                        ?>
                                        <td class="slot-pause">-</td>
                                        <?php
                                    elseif ( $is_booked ) :
                                        ?>
                                        <td class="slot-booked" title="<?php esc_attr_e( 'Already Booked', 'french-practice-hub' ); ?>">
                                            <?php esc_html_e( 'Booked', 'french-practice-hub' ); ?>
                                        </td>
                                        <?php
                                    elseif ( $is_available ) :
                                        ?>
                                        <td class="slot-available" 
                                            data-day="<?php echo esc_attr( $day_name ); ?>" 
                                            data-time="<?php echo esc_attr( $slot_time ); ?>" 
                                            data-type="<?php echo esc_attr( $slot_type ); ?>"
                                            title="<?php esc_attr_e( 'Click to book', 'french-practice-hub' ); ?>">
                                            ✓
                                        </td>
                                        <?php
                                    else :
                                        ?>
                                        <td class="slot-unavailable" title="<?php esc_attr_e( 'Not Offered', 'french-practice-hub' ); ?>"></td>
                                        <?php
                                    endif;
                                endfor;
                                ?>
                            </tr>
                            <?php
                        endforeach;
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="booking-legend">
                <h3><?php esc_html_e( 'Legend', 'french-practice-hub' ); ?></h3>
                <div class="legend-items">
                    <div class="legend-item">
                        <span class="legend-color slot-available">✓</span>
                        <span><?php esc_html_e( 'Available - Click to Book', 'french-practice-hub' ); ?></span>
                    </div>
                    <div class="legend-item">
                        <span class="legend-color slot-unavailable"></span>
                        <span><?php esc_html_e( 'Not Offered', 'french-practice-hub' ); ?></span>
                    </div>
                    <div class="legend-item">
                        <span class="legend-color slot-booked"><?php esc_html_e( 'Booked', 'french-practice-hub' ); ?></span>
                        <span><?php esc_html_e( 'Already Booked', 'french-practice-hub' ); ?></span>
                    </div>
                    <div class="legend-item">
                        <span class="legend-color slot-pause">-</span>
                        <span><?php esc_html_e( 'Break Time', 'french-practice-hub' ); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Booking Modal -->
<div id="booking-modal" class="booking-modal" style="display: none;">
    <div class="booking-modal-overlay"></div>
    <div class="booking-modal-content">
        <button class="booking-modal-close" aria-label="<?php esc_attr_e( 'Close', 'french-practice-hub' ); ?>">&times;</button>
        
        <h2><?php esc_html_e( 'Book Your Session', 'french-practice-hub' ); ?></h2>
        
        <form id="booking-form" class="booking-form">
            <?php wp_nonce_field( 'fph_booking_nonce', 'booking_nonce' ); ?>
            
            <div class="form-group">
                <label for="booking-day"><?php esc_html_e( 'Day', 'french-practice-hub' ); ?></label>
                <input type="text" id="booking-day" name="booking_day" readonly required>
            </div>
            
            <div class="form-group">
                <label for="booking-time"><?php esc_html_e( 'Time Slot', 'french-practice-hub' ); ?></label>
                <input type="text" id="booking-time" name="booking_time" readonly required>
            </div>
            
            <div class="form-group">
                <label for="booking-type"><?php esc_html_e( 'Session Type', 'french-practice-hub' ); ?></label>
                <input type="text" id="booking-type" name="booking_type" readonly required>
            </div>
            
            <div class="form-group">
                <label for="booking-name"><?php esc_html_e( 'Full Name', 'french-practice-hub' ); ?> *</label>
                <input type="text" id="booking-name" name="booking_name" required>
            </div>
            
            <div class="form-group">
                <label for="booking-email"><?php esc_html_e( 'Email Address', 'french-practice-hub' ); ?> *</label>
                <input type="email" id="booking-email" name="booking_email" required>
            </div>
            
            <div class="form-group">
                <label for="booking-phone"><?php esc_html_e( 'Phone Number', 'french-practice-hub' ); ?> *</label>
                <input type="tel" id="booking-phone" name="booking_phone" required>
            </div>
            
            <div class="form-group" id="student-age-group" style="display: none;">
                <label for="booking-age"><?php esc_html_e( 'Student Age', 'french-practice-hub' ); ?></label>
                <input type="number" id="booking-age" name="booking_age" min="1" max="100">
            </div>
            
            <div class="form-group">
                <label for="booking-notes"><?php esc_html_e( 'Additional Notes', 'french-practice-hub' ); ?></label>
                <textarea id="booking-notes" name="booking_notes" rows="4"></textarea>
            </div>
            
            <div class="form-actions">
                <button type="button" class="btn btn-secondary" id="cancel-booking"><?php esc_html_e( 'Cancel', 'french-practice-hub' ); ?></button>
                <button type="submit" class="btn btn-primary"><?php esc_html_e( 'Submit Booking', 'french-practice-hub' ); ?></button>
            </div>
            
            <div id="booking-message" class="booking-message" style="display: none;"></div>
        </form>
    </div>
</div>

<?php
get_footer();
