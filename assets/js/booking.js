/**
 * Booking System JavaScript
 * Handles booking calendar interactions and form submission
 */

(function() {
    'use strict';

    // Wait for DOM to be ready
    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('booking-modal');
        const modalOverlay = modal ? modal.querySelector('.booking-modal-overlay') : null;
        const closeBtn = modal ? modal.querySelector('.booking-modal-close') : null;
        const cancelBtn = document.getElementById('cancel-booking');
        const bookingForm = document.getElementById('booking-form');
        const availableSlots = document.querySelectorAll('.slot-available');
        const studentAgeGroup = document.getElementById('student-age-group');
        const bookingType = document.getElementById('booking-type');
        const bookingMessage = document.getElementById('booking-message');

        // Open booking modal when clicking available slot
        availableSlots.forEach(function(slot) {
            slot.addEventListener('click', function() {
                const day = this.getAttribute('data-day');
                const time = this.getAttribute('data-time');
                const type = this.getAttribute('data-type');

                // Populate modal fields
                document.getElementById('booking-day').value = capitalizeFirst(day);
                document.getElementById('booking-time').value = time;
                document.getElementById('booking-type').value = capitalizeFirst(type);

                // Show/hide student age field based on session type
                if (type === 'kids') {
                    studentAgeGroup.style.display = 'block';
                    document.getElementById('booking-age').setAttribute('required', 'required');
                } else {
                    studentAgeGroup.style.display = 'none';
                    document.getElementById('booking-age').removeAttribute('required');
                }

                // Show modal
                modal.style.display = 'flex';
                document.body.style.overflow = 'hidden';
                
                // Clear previous messages
                bookingMessage.style.display = 'none';
                bookingMessage.className = 'booking-message';
            });
        });

        // Close modal handlers
        function closeModal() {
            modal.style.display = 'none';
            document.body.style.overflow = '';
            bookingForm.reset();
            bookingMessage.style.display = 'none';
        }

        if (closeBtn) {
            closeBtn.addEventListener('click', closeModal);
        }

        if (cancelBtn) {
            cancelBtn.addEventListener('click', closeModal);
        }

        if (modalOverlay) {
            modalOverlay.addEventListener('click', closeModal);
        }

        // Handle form submission
        if (bookingForm) {
            bookingForm.addEventListener('submit', function(e) {
                e.preventDefault();

                // Show loading state
                const submitBtn = bookingForm.querySelector('button[type="submit"]');
                const originalText = submitBtn.textContent;
                submitBtn.textContent = 'Submitting...';
                submitBtn.disabled = true;

                // Prepare form data
                const formData = new FormData(bookingForm);
                formData.append('action', 'fph_submit_booking');

                // Submit via AJAX
                fetch(fphBooking.ajaxurl, {
                    method: 'POST',
                    credentials: 'same-origin',
                    body: formData
                })
                .then(function(response) {
                    return response.json();
                })
                .then(function(data) {
                    // Reset button
                    submitBtn.textContent = originalText;
                    submitBtn.disabled = false;

                    // Show message
                    bookingMessage.style.display = 'block';
                    
                    if (data.success) {
                        bookingMessage.className = 'booking-message success';
                        bookingMessage.textContent = data.data.message || 'Booking submitted successfully! We will contact you soon.';
                        
                        // Reset form after success
                        setTimeout(function() {
                            closeModal();
                            
                            // Refresh page to update booked slots
                            location.reload();
                        }, 2000);
                    } else {
                        bookingMessage.className = 'booking-message error';
                        bookingMessage.textContent = data.data.message || 'An error occurred. Please try again.';
                    }
                })
                .catch(function(error) {
                    submitBtn.textContent = originalText;
                    submitBtn.disabled = false;
                    
                    bookingMessage.style.display = 'block';
                    bookingMessage.className = 'booking-message error';
                    bookingMessage.textContent = 'Network error. Please check your connection and try again.';
                    
                    console.error('Booking error:', error);
                });
            });
        }

        // Helper function to capitalize first letter
        function capitalizeFirst(str) {
            return str.charAt(0).toUpperCase() + str.slice(1);
        }
    });
})();
