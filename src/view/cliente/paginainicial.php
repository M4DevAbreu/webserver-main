<?php require_once("../includes/autenticacao.php"); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./../assets/css/paginainicial.css">
  <link rel="stylesheet" href="/assets/css/header.css">
  <link rel="stylesheet" href="./../assets/css/footer.css">
  <link rel="stylesheet" href="./../assets/css/tema.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"/>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <header id="inicio">
    <?php include_once("../includes/header.html"); ?>
  </header>

  <div class="container shadow">
    <main>
      <p id="saudacao" class="texto-tema-adaptavel text-center mt-3">Tudo beleza, <?= htmlspecialchars($user_logado->nome) ?></p>

      <div class="container py-4 d-flex flex-column flex-md-row justify-content-between">
        <div id="calendar" class="mb-4 flex-grow-1">
          <div class="calendar-header">
            <span id="month-picker">Janeiro</span>
            <div class="month-picker-nav">
              <span class="month-change" id="prev-month"><pre><</pre></span>
              <span id="year">2025</span>
              <span class="month-change" id="next-month"><pre>></pre></span>
            </div>
          </div>
          <div id="day-labels" class="calendar-weekdays">
            <div>Dom</div><div>Seg</div><div>Ter</div><div>Qua</div><div>Qui</div><div>Sex</div><div>Sáb</div>
          </div>
          <div id="calendar-days" class="calendar-body"></div>
        </div>

        <div id="horarios" class="d-none flex-column align-items-start ms-md-4 mt-4 mt-md-0" style="max-width: 300px; overflow-y: auto">
          <h5 id="horariosTitulo" class="texto-tema-adaptavel mt-3">
            Horários disponíveis em <span id="dataSelecionada"></span>:
          </h5>
          <div class="d-flex flex-column gap-2 mt-2"></div>
        </div>
      </div>

      <section class="container py-4">
        <h4 id="servicosTitulo" class="texto-tema-adaptavel text-center">Escolha os serviços desejados:</h4>
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div id="servicos-lista" class="d-flex flex-wrap gap-3 justify-content-center">
              <div class="icon-servico" data-tipo="cabelo">
                <input type="checkbox" class="servico-checkbox" value="Corte de Cabelo" data-preco="50.00" />
                Corte de Cabelo <span class="valor-servico">R$ 50,00</span>
              </div>
              <div class="icon-servico" data-tipo="coloracao">
                <input type="checkbox" class="servico-checkbox" value="Coloração" data-preco="120.00" />
                Coloração <span class="valor-servico">R$ 120,00</span>
              </div>
              <div class="icon-servico" data-tipo="barba">
                <input type="checkbox" class="servico-checkbox" value="Barbearia" data-preco="40.00" />
                Barbearia <span class="valor-servico">R$ 40,00</span>
              </div>
              <div class="icon-servico" data-tipo="maos">
                <input type="checkbox" class="servico-checkbox" value="Manicure" data-preco="30.00" />
                Corte B <span class="valor-servico">R$ 30,00</span>
              </div>
              <div class="icon-servico" data-tipo="pes">
                <input type="checkbox" class="servico-checkbox" value="Pedicure" data-preco="40.00" />
                Corte A <span class="valor-servico">R$ 40,00</span>
              </div>
            </div>
          </div>
        </div>

        <div class="mt-4">
          <label id="comentariosLabel" for="comentarios" class="form-label texto-tema-adaptavel">
            Comentários ou especificações sobre o serviço:
          </label>
          <textarea id="comentarios" class="form-control" rows="4"></textarea>
        </div>
      </section>

      <div class="container text-center mt-4 mb-4">
        <p>
          <strong class="texto-tema-adaptavel">Valor Total:</strong>
          <span id="valor-total" class="texto-tema-adaptavel">R$ 0,00</span>
        </p>
        <button id="agendar-btn" class="btn btn-stylehub">Confirmar Agendamento</button>
      </div>
    </main>
  </div>

  <div>
    <footer class="footer mt-auto py-3">
      <div class="container text-center">
        <ul class="lista d-flex justify-content-center flex-wrap gap-3 mb-3">
          <li><a href="#" class="px-2 links">Início</a></li>
          <li><a href="#" class="px-2 links">Serviços</a></li>
          <li><a href="#" class="px-2 links">Contatos</a></li>
          <li><a href="#" class="px-2 links">Perfil</a></li>
        </ul>
        <div class="footer-divider"></div>
        <p class="mb-0">&copy; 2025 StyleHub, Inc</p>
      </div>
    </footer>
  </div>

  <!-- Modais -->
  <div class="modal fade" id="modalConfirmacao" tabindex="-1" aria-labelledby="modalConfirmacaoLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalConfirmacaoLabel">Agendamento Realizado</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body texto-tema-adaptavel" id="modal-body-confirmacao"></div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalErro" tabindex="-1" aria-labelledby="modalErroLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content border-danger">
        <div class="modal-header bg-danger text-white">
          <h5 class="modal-title" id="modalErroLabel">Erro</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body texto-tema-adaptavel" id="modalErroMensagem"></div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="./../assets/js/mododark.js"></script>
  <script>
    const calendarDays = document.getElementById('calendar-days');
    const dataSpan = document.getElementById('dataSelecionada');
    const horariosDiv = document.getElementById('horarios');
    const monthNames = ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
    const data = new Date();
    let ano = data.getFullYear();
    let mes = data.getMonth();

    function gerarCalendario() {
      calendarDays.innerHTML = '';
      const primeiroDia = new Date(ano, mes, 1);
      const diaDaSemana = primeiroDia.getDay();
      const diasNoMes = new Date(ano, mes + 1, 0).getDate();
      for (let i = 0; i < diaDaSemana; i++) calendarDays.appendChild(document.createElement('div'));
      for (let dia = 1; dia <= diasNoMes; dia++) {
        const diaEl = document.createElement('div');
        diaEl.className = 'day';
        diaEl.textContent = dia;
        diaEl.onclick = () => selecionarDia(dia);
        calendarDays.appendChild(diaEl);
      }
      document.getElementById('month-picker').textContent = monthNames[mes];
      document.getElementById('year').textContent = ano;
    }

    function selecionarDia(dia) {
      document.querySelectorAll('#calendar-days .day').forEach(el => el.classList.remove('selected'));
      const diaSelecionado = Array.from(document.querySelectorAll('#calendar-days .day')).find(el => el.textContent == dia);
      diaSelecionado.classList.add('selected');
      const dataEscolhida = new Date(ano, mes, dia);
      dataSpan.textContent = dataEscolhida.toLocaleDateString('pt-BR');
      mostrarHorarios();
    }

    function mostrarHorarios() {
      const horarios = ['09:00', '10:30', '13:00', '15:30', '17:00'];
      const container = horariosDiv.querySelector('.d-flex');
      container.innerHTML = '';
      horarios.forEach(h => {
        const btn = document.createElement('button');
        btn.className = 'horario-btn';
        btn.textContent = h;
        btn.onclick = () => {
          document.querySelectorAll('.horario-btn').forEach(b => b.classList.remove('selected-horario'));
          btn.classList.add('selected-horario');
        };
        container.appendChild(btn);
      });
      horariosDiv.classList.remove('d-none');
    }

    function mostrarErro(msg) {
      document.getElementById('modalErroMensagem').textContent = msg;
      new bootstrap.Modal(document.getElementById('modalErro')).show();
    }

    document.getElementById('prev-month').onclick = () => {
      mes--; if (mes < 0) { mes = 11; ano--; } gerarCalendario();
    };
    document.getElementById('next-month').onclick = () => {
      mes++; if (mes > 11) { mes = 0; ano++; } gerarCalendario();
    };

    gerarCalendario();

    const servicoCheckboxes = document.querySelectorAll('.servico-checkbox');
    const valorTotalSpan = document.getElementById('valor-total');

    function calcularValorTotal() {
      let total = 0;
      servicoCheckboxes.forEach(cb => {
        if (cb.checked) total += parseFloat(cb.dataset.preco);
      });
      valorTotalSpan.textContent = `R$ ${total.toFixed(2)}`;
    }

    servicoCheckboxes.forEach(cb => cb.addEventListener('change', calcularValorTotal));
    calcularValorTotal();

    document.getElementById('agendar-btn').onclick = () => {
      const servicos = Array.from(document.querySelectorAll('.servico-checkbox:checked')).map(cb => cb.value);
      const horario = document.querySelector('.horario-btn.selected-horario');
      const comentario = document.getElementById("comentarios").value;
      const dataSelecionada = dataSpan.textContent;
      const valorTotal = valorTotalSpan.textContent.replace('R$ ', '').replace(',', '.');

      if (!servicos.length) return mostrarErro("Selecione pelo menos um serviço.");
      if (!horario) return mostrarErro("Selecione um horário.");

      fetch('../pages/agendar.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({
          data: dataSelecionada,
          horario: horario.textContent,
          servicos: servicos,
          valor: valorTotal,
          comentario: comentario
        })
      })
      .then(res => res.json())
      .then(res => {
        if (res.success) {
          const modalBody = document.getElementById('modal-body-confirmacao');
          modalBody.innerHTML = `
            <p><strong>Data:</strong> ${dataSelecionada}</p>
            <p><strong>Horário:</strong> ${horario.textContent}</p>
            <p><strong>Serviços:</strong> ${servicos.join(', ')}</p>
            <p><strong>Valor Total:</strong> R$ ${parseFloat(valorTotal).toFixed(2)}</p>
            <p><strong>Comentários:</strong> ${comentario || 'Nenhum'}</p>
          `;
          new bootstrap.Modal(document.getElementById('modalConfirmacao')).show();
        } else {
          mostrarErro(res.message || 'Erro ao salvar agendamento.');
        }
      })
      .catch(() => mostrarErro('Erro ao se comunicar com o servidor.'));
    };
  </script>
</body>
</html>
