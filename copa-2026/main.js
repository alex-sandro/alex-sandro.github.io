  const urlCSV = "https://docs.google.com/spreadsheets/d/e/2PACX-1vRe4IR0NA2xm4d0j5qDJ50dagzF2AdQqBvfWOqjSXl_vTG1i-n3NNDo-Njn7eTITr4C7gbBXrjuQCm8/pub?output=csv";

  let figurinhas = [];

  async function carregarFigurinhas() {
    try {
      const resposta = await fetch(urlCSV);
      const textoCSV = await resposta.text();

      figurinhas = converterCSVparaJSON(textoCSV);

      listarFigurinhas();
      atualizarResumo();
    } catch (erro) {
      console.error("Erro ao carregar dados:", erro);
      alert("Erro ao carregar os dados da planilha.");
    }
  }

  function converterCSVparaJSON(csv) {
    const linhas = csv.trim().split("\n");
    const cabecalhos = linhas[0].split(",").map(c => c.trim());

    return linhas.slice(1).map(linha => {
      const valores = linha.split(",").map(v => v.trim());

      return {
        numero: valores[0],
        selecao: valores[1],
        jogador: valores[2],
        status: valores[3]
      };
    });
  }

  function listarFigurinhas() {
    const tbody = document.getElementById("listaFigurinhas");
    const busca = document.getElementById("busca").value.toLowerCase();
    const filtroStatus = document.getElementById("filtroStatus").value;

    tbody.innerHTML = "";

    const resultado = figurinhas.filter(item => {
      const correspondeBusca =
        item.numero.toString().includes(busca) ||
        item.selecao.toLowerCase().includes(busca) ||
        item.jogador.toLowerCase().includes(busca);

      const correspondeStatus =
        filtroStatus === "" || item.status === filtroStatus;

      return correspondeBusca && correspondeStatus;
    });

    resultado.forEach(item => {
      const tr = document.createElement("tr");

      let classeStatus = "";
      if (item.status === "Tenho") classeStatus = "tenho";
      /*if (item.status === "Faltando") classeStatus = "faltando";*/
      if (item.status === "Repetida") classeStatus = "repetida";

      tr.innerHTML = `
        <td>${item.numero}</td>
        <td>${item.selecao}</td>
        <td>${item.jogador}</td>
        <td><span class="badge ${classeStatus}">${item.status}</span></td>
      `;

      tbody.appendChild(tr);
    });

    atualizarResumo();
  }

  function atualizarResumo() {
    document.getElementById("total").innerText = figurinhas.length;
    document.getElementById("tenho").innerText = figurinhas.filter(f => f.status === "Tenho").length;
    /*document.getElementById("faltando").innerText = figurinhas.filter(f => f.status === "Faltando").length;*/
    document.getElementById("faltando").innerText = 980 - figurinhas.filter(f => f.status === "Tenho").length;
    document.getElementById("repetida").innerText = figurinhas.filter(f => f.status === "Repetida").length;
  }

  carregarFigurinhas();