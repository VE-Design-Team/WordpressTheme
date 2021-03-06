<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Glossarize jQuery Plugin</title>
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/normalize/2.1.0/normalize.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
     #tooltip
{
    text-align: center;
    color: #fff;
    background: #000;
    background: rgba(0,0,0,0.8);
    position: absolute;
    z-index: 100;
    padding: 15px;
    border-radius: 5px;
    box-sizing: border-box;
}

    @media only screen and (max-width: 800px){
        #tooltip:before{
            content: 'x';
            position: absolute;
            color: #fff;
            right: 8px;
            top: 3px;
            font-size: 12px;
        }
    }

    #tooltip:after /* triangle decoration */
    {
        width: 0;
        height: 0;
        border-left: 10px solid transparent;
        border-right: 10px solid transparent;
        border-top: 10px solid rgba(0,0,0,0.8);
        content: '';
        position: absolute;
        left: 50%;
        bottom: -10px;
        margin-left: -10px;
    }

        #tooltip.top:after
        {
            border-top-color: transparent;
            border-bottom: 10px solid #111;
            top: -20px;
            bottom: auto;
        }


        #tooltip.left:after
        {
            left: 10px;
            margin: 0;
        }

        #tooltip.right:after
        {
            right: 10px;
            left: auto;
            margin: 0;
        }
    /* Content */

    .content{
      width: 80%;
      margin: 0 auto;
    }

    /* Glossarized Content */

    .glossarizer_replaced{
      border-bottom: 1px #333 dotted;
      cursor: help;
      display: inline;
    }
  </style>
</head>
<body>

  <div class="course-content">

    <h1>Forth Very Creature Sixth Abundantly</h1>
    <p>
      <strong>
        Genetic hereditary is here, but not genetic testing
      </strong>
    </p>

    <p>Power of Attorney (POA)</p>
    <p>
      <a href="#"> A link within a paragraph:
        Treatment is here, but not evidence based treatment
      </a>
    </p>

    <a href="#"> A Standalone link
        Treatment is here, but not evidence based treatment
    </a>

    <p>Death star <em>Bring</em> our. Form were hath creature kind to multiply likeness itself place night was, third. Subdue deep night two very fruitful form kind upon make so form behold years. Moved to fifth female waters shall moved whales fifth And.</p>

    <h2>Moveth Bring Saw A Place</h2>
    <p>Greater deep abundantly the, you may. The fly stars. In divided great days third. Above replenish thing years <em>from</em> <em>abundantly</em> had tree rule. Third all whales may very <strong>Saying</strong> male beginning moveth years female created form. Morning you also abundantly third called female male divide spirit Green let, lights, after midst. Called upon good morning fowl above you&#39;ll signs green earth <em>lights</em> brought first said.</p>

    <h2>Female Us Can&#39;t The His Were Man</h2>
    <p>Together place every <em>subdue</em> good his likeness without beast Own life. Winged. Of great said good creature deep whose you fourth over <em>second</em> very. Form earth is wherein of in.</p>

    <p>Green sixth. Seas <strong>own</strong> i open he set female, meat had. <em>Abundantly</em> saying waters dry won&#39;t creature given creeping open man great moved itself set appear. I his every Own day winged. <em>Seasons</em> seasons kind thing is. Fill. Dry.</p>

    <h2>Was Man Subdue</h2>
    <p>Is grass so first day man replenish after great blessed fourth beginning in upon gathering yielding <em>tree</em> after one fifth man seasons can&#39;t. Itself <em>their</em> thing first firmament man open be creeping female, thing she&#39;d waters multiply him cattle So. Don&#39;t. Made moving.</p>

    <p>There third heaven darkness creature. Can&#39;t be isn&#39;t creepeth made evening. Created void male beast herb green. Blessed meat their female fill night spirit earth <em>made</em> whose forth saw light over signs third them. Was. Fish saying without <strong>winged</strong> from sixth our seas replenish, it third green moved likeness. In man made <strong>the</strong> fourth of tree lesser lesser.</p>

    <h2>You&#39;re Set Fish Deep First</h2>
    <p>Forth make tree. Lights made female you were. Seed without <em>bearing</em> over life two second fowl behold second. <em>Isn&#39;t</em> light stars moveth multiply female also seas creepeth saw kind darkness. Cattle from rule image sixth <strong>forth</strong> gathering. Without. Our face behold, is night female day. You&#39;ll bring seed midst form heaven.</p>

    <p>Were very fly morning one multiply after <strong>isn&#39;t</strong> face hath man may a beast. Fly from cattle seed a yielding god him. Lesser moved dry give. Blessed fifth void multiply blessed. Give grass him image great you&#39;ll given a made be lesser isn&#39;t. Set evening have Saw so. Make itself deep had. Two called whales bearing shall whose him unto. Good thing hath appear their doesn&#39;t female. I heaven sea Is dry image.</p>

    <h2>Blessed Male Whose Which A Open</h2>
    <p>To without unto kind creepeth under. Also face fruitful Divided hath air night god fish day fourth own which <strong>dominion</strong> blessed moved seas man they&#39;re life make fish tree. Bearing given of saw. Us so. Above good greater behold.</p>

    <p>Give earth <em>dominion</em> isn&#39;t his signs great set fill spirit female <strong>beast</strong> subdue. Evening cattle behold. Whose <em>make</em> <em>dry</em> replenish <strong>also</strong> said void land great first great let without spirit Fourth midst gathering. Above meat they&#39;re give.</p>

    <p>Forth image female were. <strong>Stars</strong> i, dominion winged made a For. It to waters forth Won&#39;t. Isn&#39;t also were fowl hath morning blessed thing you, them saw rule.</p>

    <h2>Above Creepeth Own Sea</h2>
    <p>Gathering itself there. It firmament together. Also created beginning of us. Which Replenish don&#39;t multiply <strong>night</strong> rule gathering grass second thing bearing above from there fruitful creeping Without fourth you&#39;ll living life. <em>Abundantly</em> yielding.</p>

    <p>Him called morning place bearing to multiply man he dry make. Beast every <strong>herb</strong> second face male called their bearing very morning divide replenish lights. Be give likeness made his them. Grass fifth.</p>

    <h2>Lesser Bring Brought You&#39;ll Beast Whose</h2>
    <p>Firmament. Fruit, saw Dry you&#39;re rule deep two day. Had beginning them can&#39;t air spirit seed, beginning good us divide <em>greater</em> hath don&#39;t female isn&#39;t herb isn&#39;t have under fowl isn&#39;t fish. Isn&#39;t land for that and waters <em>wherein</em> sea <strong>green</strong> <strong>land</strong> rule whose there said, fly lights male beast dry gathering kind was herb isn&#39;t our appear our you&#39;ll, seas let lesser.</p>

    <h2>And Appear Moveth Fourth Created Them Behold</h2>
    <p>Was. For to to whales herb and can&#39;t yielding. It great meat That. Winged male yielding May. Gathering. Abundantly creepeth is likeness. Fifth. Upon in heaven greater had he subdue fill winged living had for. Blessed one kind saying.</p>

    <h2>And Beginning Signs Spirit Fourth Creature</h2>
    <p>Great divided they&#39;re which over. Saw set said Heaven yielding <em>living</em> moving image saying unto second greater them fruit male, you first them herb sixth meat for great fowl them. Days. Sixth, male it living Signs made great us midst third doesn&#39;t together. Greater created created waters female very moving make also from, have saying moveth can&#39;t. Third yielding wherein stars shall every wherein, every.</p>

    <h2>Replenish Fruitful Evening Bring They&#39;re</h2>
    <p><strong>Heaven</strong> without let all <em>very</em> seasons be divided she&#39;d whose. That them. Firmament unto she&#39;d doesn&#39;t one creeping be thing you&#39;re. Image can&#39;t is midst own don&#39;t to.</p>

    <h2>Great Earth Great His Fourth Kind Void</h2>
    <p>Third male day <strong>herb</strong> appear. You one that two <em>seas</em> own. Have. A He life firmament, without good, together bearing man Created all very, his air itself grass won&#39;t fish unto green.</p>

    <h2>After</h2>
    <p>Saw have from were and for let <em>be</em> <em>make</em> meat fowl us wherein male unto face. Man Called great can&#39;t bearing he fruitful saying gathered fruitful day.</p>

    <h2>Was Us Abundantly Own Fowl Seas Beast</h2>
    <p>In i. Let together god. Night, lesser set doesn&#39;t green replenish <em>he</em> isn&#39;t day hath of second a darkness make night cattle hath <em>and</em> kind gathered every female. Third. You, sea their creeping i whales from waters stars all and <strong>be</strong> is make gathered living also dry second under tree, be yielding deep midst cattle fish doesn&#39;t let face. Days rule multiply brought.</p>

    <h2>Us Very</h2>
    <p>Place darkness they&#39;re So it isn&#39;t beast together lesser seasons over thing fly greater day and his hath earth them seas Fourth have <strong>brought</strong> above can&#39;t, they&#39;re fifth. In morning <em>replenish</em> sixth. Waters meat given you&#39;re herb. I Years open his. Winged. Creeping. Forth under subdue.</p>

    <p>Cattle. <strong>Light</strong> wherein given let <strong>god</strong> darkness shall. Night for beginning sixth dominion night And whose <strong>replenish</strong> days for. Hath called years likeness. For make, bearing dominion tree fifth. It you&#39;ll. Great, creeping. Life green. Light night. Kind waters lights night beast that night saw air replenish them bring god created day <em>image</em> is life, beast bearing moved. Grass void forth land.</p>

    <p>Place days blessed god. Thing. Under. Appear place spirit female form make fifth third deep. One she&#39;d he fish meat fifth have, fly Land Light. Stars good.</p>

    <h2>The They&#39;re Tree</h2>
    <p>You a land give god, god also fruitful life said sixth said good for doesn&#39;t sixth evening the fruit yielding seas female <em>god</em> that day male blessed fruitful morning, he <em>life</em> dry of had seed can&#39;t blessed image they&#39;re herb saw night in. Face seas over. Won&#39;t isn&#39;t also you&#39;ll subdue, life great <em>fly</em> spirit. Their bring.</p>

    <p>Given. Winged winged had there wherein have waters us bring. Over made unto firmament life without. Brought. Hath cattle gathered cattle light living whose don&#39;t midst you them face. Itself gathering hath, every open herb also the great midst one dry waters own meat a creeping blessed. Earth, in <em>stars</em> to gathering given. After made together. You&#39;ll. Male you&#39;re gathering to winged had.</p>

    <p>Moved multiply bring <strong>fish</strong> second whales signs fish, won&#39;t two make stars yielding. Place sea let fish the let divided gathering every rule them given beast. Lesser you&#39;ll which have Our evening green fifth in day, signs <strong>make</strong> lights one subdue green gathering every fowl grass under that gathered fish midst.</p>

    <p>That day, fly i there seed seasons us. Greater void. Evening. Spirit their living above bring may Man. Without dry of creature tree In great over. May days <strong>third</strong> evening, it <em>i</em> it their greater image green fly called waters fifth Their dry. Green have <strong>had</strong> i. Thing whales fowl seasons man together. <strong>Fly</strong> creature creeping after called. Was. Man all. Whose herb second spirit there.</p>

    <p>Wherein two day in to a sixth she&#39;d female, forth Him evening. Herb you that his beginning cattle unto i great that first cattle dominion after likeness <strong>morning</strong> fly waters light first moveth, saw whose won&#39;t. Have.</p>

    <h2>Sea Third Evening</h2>
    <p>Moveth together had life fowl cattle land fowl <em>him</em> stars evening. One doesn&#39;t. Cattle moving gathered light earth sixth lights replenish fruitful multiply living darkness, whose from us <em>under</em> face. Deep. Abundantly gathered whales earth man firmament greater air light their above is a light doesn&#39;t give, likeness hath he <strong>don&#39;t</strong> winged together very can&#39;t after seasons <em>seasons</em> second thing beginning. You, blessed divide in.</p>

    <h2>Sixth It Also Over</h2>
    <p>Moved. Air fruit that lesser own creature. <strong>Life</strong> likeness <strong>you&#39;ll</strong> image our shall. Over sixth called very. Make fourth us, their don&#39;t herb one cattle greater she&#39;d two living. You&#39;re his, life stars whose female Under after said creature shall.</p>

  </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="<?php echo get_stylesheet_directory_uri();?>/authoring-tool/js/tooltip.js"></script><script src="<?php echo get_stylesheet_directory_uri();?>/js/jquery.glossarize.js"></script>
  <script>

  $(function(){

    $('.course-content').glossarizer({
      sourceURL: '<?php echo get_stylesheet_directory_uri();?>/scorm/glossary.json',
      callback: function(){
        new tooltip();
      }
    });


  });

  </script>

</body>
</html>
