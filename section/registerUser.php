<section class="container-fluid p-pagina-imagem-principal">
 <div class="container padding-top-165px">
  <div class="row">
   <div class="col-lg-6">
    <div class="col-6-div-box-shadow">
     <h1> Aniversariantes </h1>
     <h2> DO DIA </h2>
     <p> DIGA-NOS AS SEGUINTES INFORMAÇÕES: </p>
     <form class="class-form" action="controllers/saveUser.php" method="POST">
      <input type="text" name="nome" id="nome" placeholder="Nome"/>
      <input type="text" name="dataNasc" id="dataNasc" placeholder="Data de Nascimento"/>
      <select name="funcao" id="funcao">

       <!--Turmas da Manhã-->

       <option name="1ºI01-EM"> 1ºI01-EM </option>
       <option name="1ºI1EMINF"> 1ºI1EMINF </option>
       <option name="1ºI2EMADM"> 1ºI2EMADM </option>
       <option name="1ºI1EMADM"> 1ºI1EMADM </option>
       <option name="1i01HUM"> 1i01HUM </option>
       <option name="2ºI01-EM"> 2ºI01-EM </option>
       <option name="2ºI02-EM"> 2ºI02-EM </option>
       <option name="2ºI03-EM"> 2ºI03-EM </option>
       <option name="2ºI04-EM"> 2ºI04-EM </option>
       <option name="3ºI01-EM"> 3ºI01-EM </option>
       <option name="3ºI02-EM"> 3ºI02-EM </option>
       <option name="3ºI03-EM"> 3ºI03-EM </option>
       <option name="3ºI04-EM"> 3ºI04-EM </option>
       <option name="3ºM1EMINF"> 3ºM1EMINF </option>

       <!--Turmas da Tarde-->               

       <option name="1ºV01-EM"> 1ºV01-EM </option>
       <option name="1ºV02-EM"> 1ºV02-EM </option>
       <option name="2ºV01-EM"> 2ºV01-EM </option>
       <option name="3ºV01-EM"> 3ºV01-EM </option>
       <option name="3ºV02-EM"> 3ºV02-EM </option>
       <option name="2ºV1EMINF"> 2ºV1EMINF </option>

       <!--Turmas da Noite-->

       <option name="1ºN01EJA-EM"> 1ºN01EJA-EM </option>
       <option name="2ºN01EJA-EM"> 2ºN01EJA-EM </option>
       <option name="3ºN01EJA-EM"> 3ºN01EJA-EM </option>
       <option name="3ºN02EJA-EM"> 3ºN02EJA-EM </option>
       <option name="TEC. Comércio"> TEC. Comércio </option>

       <!--Funcionários-->

       <option name="Diretor"> Diretor </option>
       <option name="Professor(a)"> Professor(a) </option>
       <option name="Professor(a) Coordenador(a) De Área"> Professor(a) Coordenador(a) De Área </option>
       <option name="Coordenador(a) Pedagógico"> Coordenador(a) Pedagógico </option>
       <option name="Coordenador(a) De Turno"> Coordenador(a) De Turno </option>
       <option name="Coordenador(a) Do Curso Técnico Em Informá(a)tica"> Coordenador Do Curso Técnico Em Informática </option>
       <option name="Secretario(a)"> Secretario(a) </option>
       <option name="Auxiliar De Secretaria"> Auxiliar De Secretaria </option>
       <option name="Pedagogo(a)"> Pedagogo(a) </option>
       <option name="PCA"> PCA </option>
       <option name="Auxiliar De Serviços Gerais"> Auxiliar De Serviços Gerais </option>
       <option name="Cozinheira"> Cozinheira </option>
       <option name="Cuidador(a)"> Cuidador(a) </option>
       <option name="Professor(a) De AEE"> Professor(a) De AEE </option>

       <!---------------->

      </select>
      <button type="submit" class="btn botao-enviar"> Enviar </button>
     </form>
     <a class="tag-a-forms" href="listPeople.php"> Lista </a>
    </div>   
   </div> 
   <div class="col-lg-6"> </div>  
  </div>   
 </div>   
</section>