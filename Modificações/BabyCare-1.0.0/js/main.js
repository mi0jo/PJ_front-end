(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner(0);
    
    
    // Initiate the wowjs
    new WOW().init();
    
    
   // Back to top button
   $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
        $('.back-to-top').fadeIn('slow');
    } else {
        $('.back-to-top').fadeOut('slow');
    }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Testimonial carousel

    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        center: true,
        dots: true,
        loop: true,
        margin: 50,
        responsiveClass: true,
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:2
            },
            1200:{
                items:3
            }
        }
    });


    // Modal Video
    $(document).ready(function () {
        var $videoSrc;
        $('.btn-play').click(function () {
            $videoSrc = $(this).data("src");
        });
        console.log($videoSrc);

        $('#videoModal').on('shown.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
        })

        $('#videoModal').on('hide.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc);
        })
    });



})(jQuery);


  $(document).ready(function() {
            // Like button functionality
            $('.like-btn').click(function(e) {
                e.preventDefault();
                $(this).toggleClass('active');
                let countText = $(this).text();
                let count = parseInt(countText.match(/\((\d+)\)/)[1]);
                
                if ($(this).hasClass('active')) {
                    $(this).html('<i class="fas fa-heart me-1"></i> Curtir (' + (count + 1) + ')');
                } else {
                    $(this).html('<i class="fas fa-heart me-1"></i> Curtir (' + (count - 1) + ')');
                }
            });
            
            // Reply button functionality
            $('.reply-btn').click(function(e) {
                e.preventDefault();
                let commentBox = $(this).closest('.comment').find('.comment').first();
                
                if (commentBox.length === 0) {
                    // If no reply box exists, create one
                    $(this).closest('.comment-actions').after(`
                        <div class="comment mt-3 ms-4">
                            <form class="reply-form">
                                <div class="mb-3">
                                    <textarea class="form-control" rows="2" placeholder="Escreva sua resposta..." required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm">Enviar</button>
                                <button type="button" class="btn btn-outline-secondary btn-sm cancel-reply">Cancelar</button>
                            </form>
                        </div>
                    `);
                }
            });
            
            // Cancel reply
            $(document).on('click', '.cancel-reply', function() {
                $(this).closest('.comment').remove();
            });
            
            // Submit new comment
            $('#add-comment').submit(function(e) {
                e.preventDefault();
                let commentText = $(this).find('textarea').val();
                
                if (commentText.trim() !== '') {
                    let newComment = `
                        <div class="comment">
                            <div class="d-flex">
                                <img src="https://randomuser.me/api/portraits/women/${Math.floor(Math.random() * 100)}.jpg" alt="User" class="user-avatar">
                                <div>
                                    <h5 class="mb-1">Você</h5>
                                    <p class="text-muted small mb-2">Agora</p>
                                    <p>${commentText}</p>
                                    
                                    <div class="comment-actions">
                                        <span class="action-btn like-btn"><i class="fas fa-heart me-1"></i> Curtir (0)</span>
                                        <span class="action-btn reply-btn"><i class="fas fa-reply me-1"></i> Responder</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;
                    
                    $('.comment-form').before(newComment);
                    $(this).find('textarea').val('');
                }
            });
            
            // Submit reply
            $(document).on('submit', '.reply-form', function(e) {
                e.preventDefault();
                let replyText = $(this).find('textarea').val();
                
                if (replyText.trim() !== '') {
                    let newReply = `
                        <div class="d-flex">
                            <img src="https://randomuser.me/api/portraits/women/${Math.floor(Math.random() * 100)}.jpg" alt="User" class="user-avatar" style="width: 40px; height: 40px;">
                            <div>
                                <h5 class="mb-1">Você</h5>
                                <p class="text-muted small mb-2">Agora</p>
                                <p>${replyText}</p>
                                
                                <div class="comment-actions">
                                    <span class="action-btn like-btn"><i class="fas fa-heart me-1"></i> Curtir (0)</span>
                                    <span class="action-btn reply-btn"><i class="fas fa-reply me-1"></i> Responder</span>
                                </div>
                            </div>
                        </div>
                    `;
                    
                    $(this).closest('.comment').html(newReply);
                }
            });
        });

         let selectedDate = null;
            let selectedBloodDrop = 0;
            let selectedEmoji = '';
            
            document.addEventListener('DOMContentLoaded', function() {
                var calendarEl = document.getElementById('calendar');
                
                var calendar = new FullCalendar.Calendar(calendarEl, {
                    initialView: 'dayGridMonth',
                    locale: 'pt-br',
                    headerToolbar: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'dayGridMonth,timeGridWeek,timeGridDay'
                    },
                    dateClick: function(info) {
                        selectedDate = info.dateStr;
                        alert('Data selecionada: ' + info.dateStr + '\nAgora você pode registrar informações para este dia.');
                    },
                    eventClick: function(info) {
                        alert('Evento: ' + info.event.title);
                    }
                });
                
                calendar.render();
            });
            
            // Funções para os ícones interativos
            function toggleDropdown(id) {
                const dropdown = document.getElementById(id);
                if (dropdown.style.display === 'block') {
                    dropdown.style.display = 'none';
                } else {
                    // Fecha todos os dropdowns antes de abrir o selecionado
                    document.querySelectorAll('.dropdown-content').forEach(d => {
                        d.style.display = 'none';
                    });
                    dropdown.style.display = 'block';
                }
            }
            
            function selectBloodDrop(level) {
                // Remove a seleção anterior
                document.querySelectorAll('.blood-drop').forEach(drop => {
                    drop.classList.remove('selected');
                });
                
                // Adiciona a seleção atual
                event.target.classList.add('selected');
                selectedBloodDrop = level;
                
                // Mostra feedback visual
                alert('Fluxo menstrual registrado como nível ' + level + ' para o dia ' + (selectedDate || 'selecione uma data'));
            }
            
            function selectEmoji(emoji) {
                // Remove a seleção anterior
                document.querySelectorAll('.emoji-option').forEach(opt => {
                    opt.classList.remove('selected');
                });
                
                // Adiciona a seleção atual
                event.target.classList.add('selected');
                selectedEmoji = emoji;
                
                // Mostra feedback visual
                alert('Humor registrado como ' + emoji + ' para o dia ' + (selectedDate || 'selecione uma data'));
            }
            
            // Fecha os dropdowns ao clicar fora
            window.onclick = function(event) {
                if (!event.target.matches('.icon-btn')) {
                    document.querySelectorAll('.dropdown-content').forEach(dropdown => {
                        dropdown.style.display = 'none';
                    });
                }
            }
