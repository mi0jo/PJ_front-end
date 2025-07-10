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
     window.addEventListener('load', function () {
        const spinner = document.getElementById('spinner');
        if (spinner) {
            spinner.classList.remove('show');
        }
    });
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

//fórum
             $(document).ready(function() {
            // Toggle comments section
            $('.comment-btn').click(function(e) {
                e.preventDefault();
                $(this).closest('.forum-post').find('.comments-section').slideToggle();
            });
            
            // botão de like
            $('.like-btn').click(function(e) {
                e.preventDefault();
                $(this).toggleClass('active');
                let countElement = $(this).find('span');
                let currentCount = parseInt(countElement.text());
                if ($(this).hasClass('active')) {
                    countElement.text(currentCount + 1);
                } else {
                    countElement.text(currentCount - 1);
                }
            });
            
            // botão salvar
            $('.save-btn').click(function(e) {
                e.preventDefault();
                $(this).toggleClass('active');
                if ($(this).hasClass('active')) {
                    $(this).html('<i class="fas fa-bookmark me-1"></i> Salvo');
                } else {
                    $(this).html('<i class="fas fa-bookmark me-1"></i> Salvar');
                }
            });
            
            
          
            // Comentários
            $('.comment-form').submit(function(e) {
                e.preventDefault();
                let commentText = $(this).find('input').val();
                if (commentText.trim() !== '') {
                    let newComment = `
                        <div class="comment">
                            <div class="d-flex">
                                <img src="https://randomuser.me/api/portraits/women/${Math.floor(Math.random() * 100)}.jpg" alt="User" class="user-avatar me-3" style="width: 40px; height: 40px;">
                                <div>
                                    <strong>Você</strong>
                                    <p class="small text-muted mb-1">Agora</p>
                                    <p>${commentText}</p>
                                </div>
                            </div>
                        </div>
                    `;
                    $(this).closest('.comments-section').find('.comment-form').before(newComment);
                    $(this).find('input').val('');
                    
                    // update na quantidade de comentários
                    let commentCountElement = $(this).closest('.forum-post').find('.comment-btn span');
                    let currentCount = parseInt(commentCountElement.text());
                    commentCountElement.text(currentCount + 1);
                }
            });
        });