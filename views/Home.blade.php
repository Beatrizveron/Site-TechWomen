@extends('layouts.main')

@section('content')
    <div id = "slider">
      <div class = "container">
        <div  class = "row">
          <div class= "col-md-7">
            <h2 class="mb-4" >Mulheres em STEM</h2>
              <h6 class="mb-4">Incentivo e oportunidade para as mulheres que desejam fazer <br> parte de um futuro tecnológico...</h6>
            <a href ="#" class = "btn button-primay btn-primary button d-md-inline-block d-block mb-md-0 mb-2 mr-md-2"> Saiba Mais </a>
            <a href ="#" class = "btn button-primay-outline btn-outline-primary button"> Fale conosco </a>
          </div>
          <div class= "col-md-5 align-self-center text-right " >
            <svg id="b8c64dc2-e86a-49bc-92bf-164106d9e7fb" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="530.87284" height="560.68008" viewBox="0 0 887.87284 569.68008"><title>proud_coder</title><rect x="276.41138" y="0.34664" width="611.46146" height="391.60712" fill="#e6e6e6"/><rect x="293.89598" y="49.46394" width="576.49225" height="319.32231" fill="#fff"/><rect x="276.1503" width="611.46146" height="25.97712" fill="#d1bdf9"/><circle cx="295.45441" cy="13.28088" r="4.81466" fill="#fff"/><circle cx="313.72965" cy="13.28088" r="4.81466" fill="#fff"/><circle cx="332.00489" cy="13.28088" r="4.81466" fill="#fff"/><path d="M863.33045,244.53256H675.64331a1.66587,1.66587,0,0,1,0-3.30318H863.33045a1.66587,1.66587,0,0,1,0,3.30318Z" transform="translate(-156.06358 -165.15996)" fill="#ccc"/><path d="M733.2818,262.7H613.94986a1.66587,1.66587,0,0,1,0-3.30317H733.2818a1.66587,1.66587,0,0,1,0,3.30317Z" transform="translate(-156.06358 -165.15996)" fill="#ccc"/><path d="M863.33045,263.03033H743.9985a1.66587,1.66587,0,0,1,0-3.30317h119.332a1.66587,1.66587,0,0,1,0,3.30317Z" transform="translate(-156.06358 -165.15996)" fill="#ccc"/><path d="M733.57144,280.86747H614.2395a1.66587,1.66587,0,0,1,0-3.30317H733.57144a1.66587,1.66587,0,0,1,0,3.30317Z" transform="translate(-156.06358 -165.15996)" fill="#ccc"/><path d="M733.86108,299.03493H614.52914a1.66587,1.66587,0,0,1,0-3.30317H733.86108a1.66587,1.66587,0,0,1,0,3.30317Z" transform="translate(-156.06358 -165.15996)" fill="#ccc"/><path d="M788.02388,280.86747H753.84629a1.66587,1.66587,0,0,1,0-3.30317h34.17759a1.66587,1.66587,0,0,1,0,3.30317Z" transform="translate(-156.06358 -165.15996)" fill="#ccc"/><path d="M788.02388,298.70461H753.84629a1.66587,1.66587,0,0,1,0-3.30317h34.17759a1.66587,1.66587,0,0,1,0,3.30317Z" transform="translate(-156.06358 -165.15996)" fill="#ccc"/><path d="M845.37273,298.70461h-34.1776a1.66587,1.66587,0,0,1,0-3.30317h34.1776a1.66587,1.66587,0,0,1,0,3.30317Z" transform="translate(-156.06358 -165.15996)" fill="#ccc"/><path d="M647.25853,244.53256h-34.1776a1.66587,1.66587,0,0,1,0-3.30318h34.1776a1.66587,1.66587,0,0,1,0,3.30318Z" transform="translate(-156.06358 -165.15996)" fill="#ccc"/><path d="M732.84734,452.83835H613.51539a1.66587,1.66587,0,0,1,0-3.30317h119.332a1.66587,1.66587,0,0,1,0,3.30317Z" transform="translate(-156.06358 -165.15996)" fill="#ccc"/><path d="M732.26806,489.17327H612.93611a1.66587,1.66587,0,0,1,0-3.30318h119.332a1.66587,1.66587,0,0,1,0,3.30318Z" transform="translate(-156.06358 -165.15996)" fill="#ccc"/><path d="M732.5577,507.34073H613.22575a1.66587,1.66587,0,0,1,0-3.30318h119.332a1.66587,1.66587,0,0,1,0,3.30318Z" transform="translate(-156.06358 -165.15996)" fill="#ccc"/><path d="M783.53445,489.50359H749.35686a1.66587,1.66587,0,0,1,0-3.30318h34.17759a1.66587,1.66587,0,0,1,0,3.30318Z" transform="translate(-156.06358 -165.15996)" fill="#ccc"/><path d="M783.53445,507.34073H749.35686a1.66587,1.66587,0,0,1,0-3.30318h34.17759a1.66587,1.66587,0,0,1,0,3.30318Z" transform="translate(-156.06358 -165.15996)" fill="#ccc"/><path d="M840.8833,489.50359H806.7057a1.66587,1.66587,0,0,1,0-3.30318h34.1776a1.66587,1.66587,0,0,1,0,3.30318Z" transform="translate(-156.06358 -165.15996)" fill="#ccc"/><path d="M863.47527,471.00581H675.78813a1.66587,1.66587,0,0,1,0-3.30317H863.47527a1.66587,1.66587,0,0,1,0,3.30317Z" transform="translate(-156.06358 -165.15996)" fill="#ccc"/><path d="M647.40335,471.00581h-34.1776a1.66587,1.66587,0,0,1,0-3.30317h34.1776a1.66587,1.66587,0,0,1,0,3.30317Z" transform="translate(-156.06358 -165.15996)" fill="#ccc"/><polygon points="547.965 163.221 501.622 208.985 547.965 254.748 558.392 244.321 523.345 209.274 558.681 173.938 547.965 163.221" fill="#e6e6e6"/><polygon points="616.32 163.221 662.662 208.985 616.32 254.748 605.893 244.321 640.939 209.274 605.603 173.938 616.32 163.221" fill="#e6e6e6"/><polygon points="547.965 163.221 501.622 208.985 547.965 254.748 558.392 244.321 523.345 209.274 558.681 173.938 547.965 163.221" fill="#d1bdf9"/><polygon points="616.32 163.221 662.662 208.985 616.32 254.748 605.893 244.321 640.939 209.274 605.603 173.938 616.32 163.221" fill="#d1bdf9"/><path d="M626.6665,711.1954c14.41965,19.311,44.352,21.34353,44.352,21.34353s6.55352-29.2768-7.86613-48.5878-44.352-21.34353-44.352-21.34353S612.24685,691.88439,626.6665,711.1954Z" transform="translate(-156.06358 -165.15996)" fill="#e6e6e6"/><path d="M700.12323,718.455c-9.5151,12.74275-29.26658,14.08395-29.26658,14.08395s-4.32447-19.31887,5.19062-32.06162,29.26658-14.084,29.26658-14.084S709.63832,705.71222,700.12323,718.455Z" transform="translate(-156.06358 -165.15996)" fill="#e6e6e6"/><polygon points="149.825 460.994 149.825 511.12 135.503 511.12 125.956 458.607 149.825 460.994" fill="#ffb9b9"/><polygon points="36.445 460.994 36.445 511.12 22.124 511.12 12.576 458.607 36.445 460.994" fill="#ffb9b9"/><path d="M268.06126,256.64223s-23.014-16.54132-25.89076-8.63026S259.431,270.3068,259.431,270.3068Z" transform="translate(-156.06358 -165.15996)" fill="#ffb9b9"/><path d="M186.43344,277.85827c0,28.59815,12.31285,29.4867,32.37127,29.4867s40.2667-.88855,40.2667-29.4867-16.26056-51.78152-36.319-51.78152S186.43344,249.26012,186.43344,277.85827Z" transform="translate(-156.06358 -165.15996)" fill="#2f2e41"/><path d="M235.69781,277.49868s-2.87676,21.57563,10.78781,23.014-44.58964,5.7535-44.58964,5.7535,15.10294-13.66457,7.19188-24.45239S235.69781,277.49868,235.69781,277.49868Z" transform="translate(-156.06358 -165.15996)" fill="#ffb9b9"/><path d="M308.33578,662.98336l5.03431,42.43208s25.17158,30.92508,9.34944,28.76751-25.89076.45876-25.89076-2.418-.372-13.155-2.52959-13.155-3.9431,16.23013-3.9431,16.23013-6.47269-.48981-7.19188-1.209-1.43837-41.88017-1.43837-41.88017-2.15757-12.22619,2.15756-17.9797,3.59594-10.78781,3.59594-10.78781Z" transform="translate(-156.06358 -165.15996)" fill="#2f2e41"/><path d="M193.76255,662.51677l5.03431,42.43208s25.17158,30.92508,9.34945,28.76751-25.89077.45876-25.89077-2.418-.372-13.155-2.52958-13.155-3.94311,16.23013-3.94311,16.23013-6.47269-.48981-7.19188-1.209-1.43837-41.88017-1.43837-41.88017-2.15756-12.22619,2.15756-17.9797,3.59594-10.78781,3.59594-10.78781Z" transform="translate(-156.06358 -165.15996)" fill="#2f2e41"/><path d="M270.938,410.54843s23.014,65.44609,24.45239,79.82985-1.43838,63.28853-1.43838,63.28853,20.85645,84.49856,16.54132,85.21775-28.3456,4.12889-29.06478.533-3.28315-9.16321-2.564-11.32077S276.707,618.02811,276.707,613.713s-10.08416-26.96353-9.365-30.55947-12.22619-56.81584-14.38376-61.131-7.91106-34.521-7.91106-34.521-32.36346,88.46011-33.08264,90.61767-3.59594,5.75351-2.15757,6.47269-2.15756,5.75351-2.15756,5.75351-7.45231,29.84028-7.45231,31.27866,1.43838,17.71926-1.43837,18.43845-32.26142.67328-33.6998-4.361,15.26134-63.33577,15.26134-63.33577,12.2262-36.67858,8.63026-46.028,3.59594-65.4461,6.47269-69.76122,3.59594-30.20589,3.59594-30.20589Z" transform="translate(-156.06358 -165.15996)" fill="#2f2e41"/><circle cx="67.04844" cy="101.1913" r="23.01401" fill="#ffb9b9"/><path d="M235.69781,295.47837s-25.89077.71919-27.32914-1.43837-37.39777,5.03431-37.39777,19.41807,20.85645,70.48041,20.85645,70.48041,7.91106,40.27451,5.7535,44.58964,79.82985-9.34944,77.67229-16.54132-14.38376-23.014,1.43837-36.67858,22.29483-28.04832,22.29483-28.04832l-18.69889-49.624s-18.69888-2.87676-23.014,0S235.69781,295.47837,235.69781,295.47837Z" transform="translate(-156.06358 -165.15996)" fill="#d1bdf9"/><path d="M293.952,350.85584l5.03432-3.59594s46.7472-48.90478,34.521-58.25422S303.30146,271.026,294.67121,270.3068s-15.82213-7.19188-15.82213-7.19188-9.34945-16.54132-16.54132-5.7535-15.10295,14.38375-5.03432,17.97969,16.54132,2.15757,21.57564,5.75351,24.45238,9.34944,15.82213,11.507a77.19464,77.19464,0,0,0-14.38376,5.03432L270.938,314.17726Z" transform="translate(-156.06358 -165.15996)" fill="#d1bdf9"/><path d="M212.68379,472.39858s18.69889,27.32914,5.03432,25.89076-20.13726-20.13726-20.13726-20.13726Z" transform="translate(-156.06358 -165.15996)" fill="#ffb9b9"/><path d="M176.00521,309.86213l-5.03431,3.59594s-16.54132,90.61767,0,114.35086,17.9797,22.29483,17.9797,22.29483,2.87675-2.15757,4.31512,12.22619-.71918,20.13726,3.59594,20.13726,23.7332-4.31513,22.29483-7.91107-10.78782-24.45238-11.507-29.4867-4.31513-16.54132-5.7535-23.014,6.47269-10.06863,2.87675-23.7332-8.63026-38.11695-8.63026-43.15127S176.00521,309.86213,176.00521,309.86213Z" transform="translate(-156.06358 -165.15996)" fill="#d1bdf9"/><path d="M200.8172,245.85441c0,7.74533,10.62571,14.02416,23.73319,14.02416s25.17158,4.1494,25.17158-3.59594-12.06409-24.45238-25.17158-24.45238S200.8172,238.10908,200.8172,245.85441Z" transform="translate(-156.06358 -165.15996)" fill="#2f2e41"/><path d="M258.85586,282.712s.96872,26.07138-24.939,24.633,3.50113-22.2854,3.50113-22.2854Z" transform="translate(-156.06358 -165.15996)" fill="#2f2e41"/><rect y="567.37896" width="702.90551" height="2.24072" fill="#3f3d56"/></svg>
          </div>
      </div>
    </div>
    <div id = "Info">
      <div class = "container" >
        <div  class = "row" >
          <div class= "col-md-12 align-self-center" >
            <h3 class="mb-4">Qual o contexto geral do gênero feminino na TI atualmente? </h3>
            <p>Ao analisar a participação feminina e masculina no mercado de trabalho de tecnologia, observa-se uma diferença enorme tanto no setor salarial quanto na parte participativa. O próprio Instituto Brasileiro de Geografia e Estatística (IBGE), constatou que apenas 20% das pessoas que atuam na área, são do gênero feminino. E segundo o mesmo, a desigualdade salarial é de 34% a menos para as mulheres que atuam no mercado de trabalho da TI. </p>
             <p>Irrefutavelmente constata-se a predominância de adversidades, no tocante do que é referido a cada gênero socialmente, e como tais atribuições impactam no processo de desenvolvimento profissional, e na consolidação do seu reconhecimento na área tecnológica. </p>
             <p class="mb-5">Logo, com base nos dados e informações apresentadas e do desejo de lutar pela equidade de direitos entre ambos os gêneros, construimos esta plataforma capaz de gerar assistência, oportunidade e divulgação para as mulheres no âmbito tecnológico, e que também possibilite desenvolver uma interação com as mesmas através do Tech Women, envolvendo parcerias com empresas capazes de proporcionar oportunidades para elas. </p>
             <h3 class="mb-3"> O que o Site Oferece?</h3>
             <ul>
              <li>Representatividade: Ha uma grande importância de apresentar modelos femininos que contribuíram para o desenvolvimento da computação como incentivo e estímulo para que outras mulheres se disponham a  mudar a realidade atual.    </li>
              <li>Incentivo: Disponibilizamos palestras feitas com profissionais da área para que mais garotas conheçam e se interessem pela tecnologia.  </li>
              <li class="mb-5">Oportunidades: A partir de parcerias com empresas, disponibilizamos vagas...</li> 
            </ul>
            </div>
        </div>
      </div>

      <div id= "conclusão">
        <div class = "container" >
           <div  class = "row" >
              <div class= "col-lg-4 align-self-center mb-md-0 mb-4" >
           <h3 class="mb-3">Como podemos mudar esse cenário?</h3>
           <p>Após a análise acreditamos que uma boa proposta para que a equiparação realmente aconteça no campo da TI, seria conscientizar o cenário sociocultural e principalmente  criar políticas públicas educacionais que as incentivem desde o ensino básico, como meio de desconstruir as características pré-determinadas à ambos os sexos. </p>
           </div>
            <div class="col-lg-8 col-md-6 align-self-center text-center">
             <svg class="mb-5" id="b6fe4ea4-91cd-4e88-acbb-2663d3326f54" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="500.87284" height="200.68008" viewBox="0 0 887.87284 569.68008"><title>new_ideas</title><path d="M1050.48389,297.81272c0,35.17-8.33,64.12-22.7799,88.92a177.67758,177.67758,0,0,1-16.19,23.25c-53.12,64.97-151.88,100.53-241.14,158.13-263.48,170.02-292.02-102.42-280.12-270.3,4.8-67.74,31.18-129.79,73.09-177.3a278.22062,278.22062,0,0,1,28.45-27.97c47.58-40.52,109.05-65.04,178.58-65.04,119.29,0,221.16,71.95,261.55,173.34a261.84957,261.84957,0,0,1,18.55993,96.97Z" transform="translate(-93.48517 -27.50272)" fill="#d063ff"/><path d="M830.054,88.4227l-266.71,32.09a278.22062,278.22062,0,0,1,28.45-27.97Z" transform="translate(-93.48517 -27.50272)" fill="#d0cde1"/><path d="M1027.704,386.7327a177.67758,177.67758,0,0,1-16.19,23.25l-228.46-27.48Z" transform="translate(-93.48517 -27.50272)" fill="#d0cde1"/><path d="M1041.2439,228.72269l-387.18994-50.22,377.87,22.34A260.439,260.439,0,0,1,1041.2439,228.72269Z" transform="translate(-93.48517 -27.50272)" fill="#d0cde1"/><path d="M516.51853,99.50486c0,.69-.02,1.37-.08,2.04a27.99706,27.99706,0,1,1-52.68-15.11,25.73956,25.73956,0,0,1,2.06-3.31,27.9889,27.9889,0,0,1,50.6,14.1C516.4885,97.97483,516.51853,98.73484,516.51853,99.50486Z" transform="translate(-93.48517 -27.50272)" fill="#d063ff"/><path d="M516.51853,99.50486c0,.69-.02,1.37-.08,2.04l-41.92-5.04,41.9.72C516.4885,97.97483,516.51853,98.73484,516.51853,99.50486Z" transform="translate(-93.48517 -27.50272)" fill="#d0cde1"/><path d="M506.51853,113.61484l-38.78,4.67a28.05694,28.05694,0,0,1-2.96-3.95Z" transform="translate(-93.48517 -27.50272)" fill="#d0cde1"/><path d="M495.51853,82.61484l-31.76,3.82a25.73956,25.73956,0,0,1,2.06-3.31Z" transform="translate(-93.48517 -27.50272)" fill="#d0cde1"/><path d="M900.25143,603.63055c-.32346.60949-.65991,1.20075-1.027,1.76443a27.99706,27.99706,0,1,1-39.45-38.042,25.73938,25.73938,0,0,1,3.37127-1.9581,27.98891,27.98891,0,0,1,38.08621,36.17477C900.94214,602.265,900.61239,602.95037,900.25143,603.63055Z" transform="translate(-93.48517 -27.50272)" fill="#d063ff"/><path d="M900.25143,603.63055c-.32346.60949-.65991,1.20075-1.027,1.76443L864.5584,581.29206l36.67354,20.27763C900.94214,602.265,900.61239,602.95037,900.25143,603.63055Z" transform="translate(-93.48517 -27.50272)" fill="#d0cde1"/><path d="M884.80385,611.4064l-36.44426-14.054a28.05745,28.05745,0,0,1-.76292-4.87668Z" transform="translate(-93.48517 -27.50272)" fill="#d0cde1"/><path d="M889.61936,578.867l-29.8449-11.514a25.73938,25.73938,0,0,1,3.37127-1.9581Z" transform="translate(-93.48517 -27.50272)" fill="#d0cde1"/><path d="M1098.56381,120.95526c.48176.494.9422.99477,1.367,1.5163a27.99707,27.99707,0,1,1-48.26355,25.96387,25.73851,25.73851,0,0,1-.83628-3.80793,27.9889,27.9889,0,0,1,46.06931-25.23471C1097.47405,119.88088,1098.02619,120.404,1098.56381,120.95526Z" transform="translate(-93.48517 -27.50272)" fill="#d063ff"/><path d="M1098.56381,120.95526c.48176.494.9422.99477,1.367,1.5163l-33.52955,25.66038,30.499-28.73915C1097.47405,119.88088,1098.02619,120.404,1098.56381,120.95526Z" transform="translate(-93.48517 -27.50272)" fill="#d0cde1"/><path d="M1101.25637,138.03864l-24.50216,30.41946a28.0572,28.0572,0,0,1-4.87694-.76118Z" transform="translate(-93.48517 -27.50272)" fill="#d0cde1"/><path d="M1071.73725,123.52584l-20.07,24.90959a25.73851,25.73851,0,0,1-.83628-3.80793Z" transform="translate(-93.48517 -27.50272)" fill="#d0cde1"/><path d="M573.26553,636.95591s61.44557,2.56024,61.44557,17.92163-69.12627,0-69.12627,0Z" transform="translate(-93.48517 -27.50272)" fill="#a0616a"/><path d="M481.09717,872.49728l-115.21045-7.6807L360.76625,803.371l-25.60232,53.76488-112.65022-15.3614c2.56023-97.28882,43.524-192.01741,46.08418-204.81858s8.67923-65.69564,8.67923-65.69564c11.1882-23.73325,69.81727-25.96064,115.77362-23.81013,19.04829.87055,35.94576,2.509,46.36577,3.68674,6.88688.768,10.95787,1.33137,10.95787,1.33137,18.35667,18.92015,30.18524,44.70155,37.45621,73.50417C514.04734,729.73871,481.09717,872.49728,481.09717,872.49728Z" transform="translate(-93.48517 -27.50272)" fill="#2f2e41"/><circle cx="259.60038" cy="187.01487" r="64.00581" fill="#a0616a"/><path d="M309.56161,229.879S291.64,309.24619,263.47743,332.28828s110.09,0,110.09,0-30.72278-51.20465-7.68069-74.24674S309.56161,229.879,309.56161,229.879Z" transform="translate(-93.48517 -27.50272)" fill="#a0616a"/><path d="M440.13345,557.58871,397.659,562.29945,278.83882,575.51034s-.56318-1.51061-1.5617-4.25007c-8.628-23.52854-50.18049-138.022-54.76341-172.406-5.12046-38.40349,48.64441-84.48767,48.64441-84.48767s51.20465-10.24093,66.566-10.24093,76.807,23.04209,76.807,23.04209l22.914,206.12433,1.97143,17.84474Z" transform="translate(-93.48517 -27.50272)" fill="#d0cde1"/><path d="M487.83059,625.97242,401.73,575.51034s-1.51076-4.91576-4.071-13.21089c-1.28011-4.14756-2.8415-9.16551-4.60823-14.84931-9.93371-31.90055-26.60085-84.53892-39.96518-122.9935-20.48186-58.88534,79.36719,104.96952,79.36719,104.96952l4.99233,3.866,1.97143,17.84474c6.88688.768,10.95787,1.33137,10.95787,1.33137C468.73105,571.3884,480.55962,597.1698,487.83059,625.97242Z" transform="translate(-93.48517 -27.50272)" opacity="0.15"/><path d="M373.56741,332.28828s-25.60232,33.283-5.12046,92.16836,48.64441,151.0537,48.64441,151.0537l148.49347,87.0479,20.48186-25.60233L447.81415,529.42616s-5.12047-194.57765-30.72279-202.25835S373.56741,332.28828,373.56741,332.28828Z" transform="translate(-93.48517 -27.50272)" fill="#d0cde1"/><path d="M246.83592,556.3086s35.84325,74.24673,51.20464,66.566S259.63708,538.387,259.63708,538.387Z" transform="translate(-93.48517 -27.50272)" fill="#a0616a"/><path d="M242.99557,352.77013,107.30326,465.42035s-51.20464,35.84326,43.524,61.44558S253.2365,567.82964,253.2365,567.82964s10.24093-33.283,23.04209-28.16255l-110.09-53.76488,89.60813-53.76488Z" transform="translate(-93.48517 -27.50272)" fill="#d0cde1"/><path d="M188.45949,267.05154c7.12167-3.52691,22.84789-10.64479,36.24333-19.2202-.93932-27.89762,2.49607-53.22261,12.55222-66.64662,5.64462-12.81652,17.49793-25.6481,26.7814-35.75325,22.798-24.81537,73.20958-38.66708,82.15062-26.26844,67.62534,1.33509,74.74468,54.34307,74.74468,54.34307-.3518,22.17187-23.39557,22.87345-43.58176,22.0655,1.80765,15.13647-3.00971,30.86424-16.95952,37.83915-26.676,13.338-34.67888,30.67741-21.34081,42.68173s37.3465,44.01548,5.33523,52.01821-36.01275,24.00854-26.676,30.67752S296.36792,346.784,296.36792,346.784s-5.33512,32.01127-33.345,24.00842c-2.51013-.71721-5.01892-2.55489-7.48541-5.30331-7.56478,8.312-14.31345,13.22658-19.39967,13.25359-29.13026.15447-25.63705-32.10971-25.63705-32.10971s-34.57609,9.71049-23.7871,5.80578,11.25117-20.39647-17.4169-36.73375S172.37879,275.015,188.45949,267.05154Z" transform="translate(-93.48517 -27.50272)" fill="#2f2e41"/><path d="M545.869,350.68362l-.46437-.06122,1.13287,4.30643a113.17562,113.17562,0,0,0,4.65,17.67685L584.41385,498.9135a21.40811,21.40811,0,0,0,17.43077,15.71007l67.75971,10.48261a21.408,21.408,0,0,0,22.1461-11.05183l64.39386-120.27626a113.00339,113.00339,0,0,0,5.50835-10.28834l2.18627-4.08367-.34094-.04495a113.84725,113.84725,0,1,0-217.629-28.67751Z" transform="translate(-93.48517 -27.50272)" fill="#3f3d56"/><path d="M673.7627,533.3584a23.29759,23.29759,0,0,1-3.56446-.27442l-70.82763-10.958a23.3712,23.3712,0,0,1-19.03418-17.15528L545.606,372.94482a119.05567,119.05567,0,0,1-4.87793-18.55615l-.87842-5.77588A120.02561,120.02561,0,0,1,677.24219,214.74951l-.30664,1.97656a118.0685,118.0685,0,0,0-134.93116,132.9126l.6753,4.32031a118.2809,118.2809,0,0,0,4.83691,18.39991l34.7544,132.103a21.36975,21.36975,0,0,0,17.40527,15.6875l70.82764,10.958a21.407,21.407,0,0,0,22.11425-11.03613l1.76368.94336A23.42072,23.42072,0,0,1,673.7627,533.3584Z" transform="translate(-93.48517 -27.50272)" fill="#d0cde1"/><rect x="608.73851" y="437.37967" width="125.31395" height="2.58676" transform="translate(-64.90222 890.7514) rotate(-69.88499)" fill="#d0cde1"/><rect x="621.52776" y="368.50149" width="2.58676" height="125.31395" transform="translate(-111.81076 0.25189) rotate(-2.51583)" fill="#d0cde1"/><path d="M667.77507,593.21348l-90.75733-14.04041a2.587,2.587,0,0,1,.791-5.11309l90.75733,14.04041a2.587,2.587,0,1,1-.791,5.11309Z" transform="translate(-93.48517 -27.50272)" fill="#3f3d56"/><path d="M670.10222,573.94052l-90.75733-14.04041a2.587,2.587,0,1,1,.791-5.11309l90.75734,14.04041a2.587,2.587,0,1,1-.791,5.11309Z" transform="translate(-93.48517 -27.50272)" fill="#3f3d56"/><path d="M672.42937,554.66756,581.672,540.62715a2.587,2.587,0,0,1,.791-5.11309l90.75733,14.04041a2.587,2.587,0,0,1-.791,5.11309Z" transform="translate(-93.48517 -27.50272)" fill="#3f3d56"/><path d="M619.57535,604.42863c18.00222,2.785,34.1481-4.99048,36.06278-17.367l-65.19188-10.08536C588.53156,589.35278,601.57312,601.64364,619.57535,604.42863Z" transform="translate(-93.48517 -27.50272)" fill="#3f3d56"/><path d="M652.19879,354.60221c-3.87236-.59843-7.07617-3.65939-8.83264-5.711-.57595-.67259-1.1365-1.37029-1.69874-2.06952-2.04551-2.54625-3.97681-4.95084-6.66642-6.20478-5.93686-2.76991-12.93209,1.099-18.98864,5.24984l-1.46325-2.13343c6.65876-4.56514,14.42362-8.78213,21.54579-5.46138,3.23493,1.50894,5.44871,4.26464,7.58906,6.92909.545.67867,1.089,1.35527,1.64693,2.00782,1.82636,2.13272,5.46883,5.58876,9.37174,4.79166a12.5979,12.5979,0,0,0,4.49545-2.37986,24.07683,24.07683,0,0,1,3.18135-2.00734,12.66906,12.66906,0,0,1,13.90684,1.96545,25.02449,25.02449,0,0,1,1.88717,1.99578c1.16372,1.32656,2.26229,2.5785,3.69247,3.03366,2.11435.676,4.349-.53253,6.71686-1.80932,2.442-1.31774,4.96637-2.68088,7.8299-2.34462.09286.01117.18677.02378.27915.03807,5.09561.78831,7.44484,6.42363,8.77412,10.62937l-2.46725.7789c-1.80618-5.71683-4.00582-8.55982-6.889-8.87675-2.05123-.24128-4.114.87246-6.298,2.05116-2.7378,1.4784-5.57148,3.00651-8.7311,1.99813-2.11483-.67292-3.5069-2.2585-4.852-3.79208a22.79725,22.79725,0,0,0-1.68845-1.79311,10.16528,10.16528,0,0,0-11.01236-1.55665,21.837,21.837,0,0,0-2.83631,1.80124,14.69665,14.69665,0,0,1-5.46961,2.80242A8.504,8.504,0,0,1,652.19879,354.60221Z" transform="translate(-93.48517 -27.50272)" fill="#d0cde1"/></svg>
         </div>
      </div>
    </div>
  
@endsection
      