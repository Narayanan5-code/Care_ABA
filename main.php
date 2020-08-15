<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Care ABA</title>
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>

  $(document).ready(function(){
    document.getElementById('defaultTab').click();
  });
  function openCity(evt, cityName) {

  var i, tabcontent, tablinks;

  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }


  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }


  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}


  </script>



<script>


    document.addEventListener('DOMContentLoaded',()=>{
      document.getElementById('sign_submit').addEventListener('click',SendData);
    });
    document.addEventListener('DOMContentLoaded',()=>{
      document.getElementById('voicesubmit').addEventListener('click',addVoice);
    });

    document.addEventListener('DOMContentLoaded',()=> {
        document.getElementById('goalssubmit').addEventListener('click',addGoals);
    });

    document.addEventListener('DOMContentLoaded',()=> {
      document.getElementById('pocsubmit').addEventListener('click',addPoc);
   });

   document.addEventListener('DOMContentLoaded',()=> {
     document.getElementById('fluencysubmit').addEventListener('click',addFluency);
   });

   document.addEventListener('DOMContentLoaded',()=>{
      document.getElementById('Expressive_language_submit').addEventListener('click',addExpressive_Lang);
   });

   document.addEventListener('DOMContentLoaded',()=>{
     document.getElementById('recep_lang_submit').addEventListener('click',addReceptive_Lang);
   });

   document.addEventListener('DOMContentLoaded',()=>{
     document.getElementById('articul_submit').addEventListener('click',addArticulation);
   });

   document.addEventListener('DOMContentLoaded',()=>{
     document.getElementById('case_history_submit').addEventListener('click',addCase_History);
   });



   let poc = [];
   let goals=[];
   let voice =[];
   let Fluency = [];
   let Expressive_language = [];
   let Receptive_langauage = [];
   let Articulation = [];
   let Case_History_Adult =[];


    const addPoc = (d) =>{

        d.preventDefault();

        let datas = {
            Diagnosis : document.getElementById("diagnosis").value,
            ST_Not_Indicated : document.getElementById('ST_Not_Indicated').checked,
            Articulation_or_Phonology : document.getElementById('AnT').checked,
            Receptive_langauage : document.getElementById('Rec_lang').checked,
            expressive_language : document.getElementById('Expre_lang').checked,
            Fluency : document.getElementById('fluen').checked,
            Voice : dodument.getElementById('voc').checked,
            prognosis : document.getElementById("prognosis").value,
            frequency : document.getElementById("frequency").value,
            week : document.getElementById("weeks").value,
            plan_care_discussed : document.getElementById("plan_care_discussed").value,
            data_of_service : document.getElementById("data_of_service").value,
            time_from : document.getElementById("from_time").value,
            time_to : document.getElementById("to_time").value,
            summary : document.getElementById("summ_recom").value

        };
        poc.push(datas);
        console.log(JSON.stringify(poc));

    }

    const addGoals = (d) =>{

        d.preventDefault();
        let datas = {
            goal1 : document.getElementById("goal_1").value,
            goal2 : document.getElementById("goal_2").value,
            goal3 : document.getElementById("goal_3").value,
            goal4 : document.getElementById("goal_4").value,
            goal5 : document.getElementById("goal_5").value
        };
        goals.push(datas);


    }

  const addVoice = (d) =>{
    d.preventDefault();

    let datas = {
      Within_normal_limit : document.getElementById('voice_wnl').checked,
      volume : document.getElementById("volume").value,
      volumeexp : document.getElementById("volYes").value,
      quality : document.getElementById('quality').value,
      qualityexp : document.getElementById('qualityexp').value,
      resonance : document.getElementsByClassName("resonance").value,
      resonanceexp : document.getElementById('resonanceexp').value,
      pitch : document.getElementById("pitch").value,
      pitchexp : document.getElementById('pitchexp').value,
      behavioural_componenets : document.getElementById("behavioural_com").value,
      result : document.getElementById('result').value
    };
    voice.push(datas);
    console.log(JSON.stringify(voice));
  }

  const addFluency = (d) => {
    d.preventDefault();
    let datas ={
      Within_normal_limit : document.getElementById("fluency_wnl").checked,
      Dysfluencies :  document.getElementById('dysfluencies').value,
      Phrase_repetitions : document.getElementById('phrase_rep').checked,
      Sound_Repetitons : document.getElementById('sound_rep').checked,
      Single_word_Repetitions : document.getElementById('single_word_rep').checked,
      FillersorInterjextions : document.getElementById('FOI').checked,
      Prolongations : document.getElementById("prolong").checked,
      Blocks: document.getElementById('bloc').checked,
      Part_Word_Repetition : document.getElementById('PWR').checked,
      Revisions : document.getElementById('revi').checked,
      Not_Finishing_Word : document.getElementById('NFW').checked,
      Secondary_Mannerisms_or_Physical_movements: document.getElementById('sec_mannerism').value,
      Secondary_Mannerisms_or_Physical_movements_exp : document.getElementById('sec_mannerism_exp').value,
      Results : document.getElementById('Fluency_result').value


    };
    Fluency.push(datas);
    console.log(JSON.stringify(Fluency));
  }

  const addExpressive_Lang = (d) => {
    d.preventDefault();

    let datas = {
    Within_normal_limit : document.getElementById("Exp_lan_wnl").checked,
    Informal_Observations_in_Conversation : document.getElementById("informal_obser").value,
    Naming_in_categories : document.getElementById('naming_category').value,
    Categorization : document.getElementById('categorization').value,
    Word_Finding_Difficulties : document.getElementById('wrd_find_difficulties').value,
    Syntax : document.getElementById('syntax').value,
    Describe_syntax : document.getElementById('des_syntax').value,
    Morphology : document.getElementById('morphology').value,
    Mean_Length_Utterance : document.getElementById('mean_len_utter').value,
    Topic_Maintenance : document.getElementById('top_maint').checked,
    Initial_conversation : document.getElementById('initial_conve').checked,
    Appropriate_Eye_contact : document.getElementById('AEC').checked,
    Basi_Social_Language : document.getElementById('BSL').checked,
    Asks_Appropriately_For_Clarification_and_Repetition : document.getElementById('AAFCAR').checked,
    Other: document.getElementById('oth').checked,
    Other_Explanation : document.getElementById('oth_exp').value,
    Explain_pragmatics : document.getElementById('explain_pragmatics').value,
    Written_expression : document.getElementById('written_expression').value,
    Result : document.getElementById('Expre_lang_result').value

  };
     Expressive_language.push(datas);
  }

  const addReceptive_Lang = (d) => {
    d.preventDefault();
    let datas = {
      Within_normal_limit : document.getElementById('recep_lang_wnl').checked,
      Following_direction_Limit : document.getElementById('follow_dir').value,
      Repeating_Number : document.getElementById('repeat_no').value,
      Repeating_Sentences : document.getElementById('repeatsentence').value,
      Listening_to_Short_Paragraph : document.getElementById('listen_para').value,
      Comprehension_of_Paragraphs : document.getElementById('compre_para').value,
      Reading_Comprehension : document.getElementById('read_compre').value,
      Result: document.getElementById('recep_lan_result').value
    };
    Receptive_langauage.push(datas);
    console.log(JSON.stringify(Receptive_langauage));

  }

  const addArticulation = (d)=> {
    d.preventDefault();
    let datas ={
      Within_normal_limit : document.getElementById('arti_wnl').checked,
      Substitutions: document.getElementById('SPP').checked,
      Omissions : document.getElementById('omis').checked,
      Distortions : document.getElementById('distor').checked,
      Explain_sound_production_patterns : document.getElementById('ESPP').value,
      Apraxia : document.getElementById('apra').value,
      Apraxia_exp : document.getElementById('apra_exp').value,
      Dysarthia : document.getElementById('dysar').value,
      Dysarthia_exp : document.getElementById('dysar_exp').value,
      Disturbance_of_Prosody:document.getElementById('DOP').value,
      Disturbance_of_Prosody_exp : document.getElementById('DOPE').value,
      Stimulability : document.getElementById('stimul').value,
      Stimulability_exp : document.getElementById('stimul_exp').value,
      Intelligibility : document.getElementById('intelli').value,
      Select_Listener : document.getElementById('SL').value,
      Percent : document.getElementById('perc').value,
      Oral_Motor_Examination : document.getElementById('OME').value,
      Expalin_Oral_Motor_Examination : document.getElementById('EOME').value,
      Backing : document.getElementById('bac').checked,
      Fronting : document.getElementById('fron').checked,
      Stopping : document.getElementById('stopp').checked,
      Initial_Consonant_Deletion : document.getElementById('ICD').checked,
      Final_Consonant_Deletion : document.getElementById('FCD').checked,
      Cluster_Reduction: document.getElementById('CR').checked,
      Other : document.getElementById('arti_oth').checked,
      Result: document.getElementById('arti_result').value
    }

    Articulation.push(datas);
    console.log(JSON.stringify(Articulation));
  }


  const addCase_History = (d) => {
    d.preventDefault();

    let datas ={
      English : document.getElementById('engl').checked,
      Spanish : document.getElementById('spani').checked,
      other_Language : document.getElementById('oth_lang').value,
      Spouse: document.getElementById('spo').checked,
      Child : document.getElementById('chil').checked,
      Parents : document.getElementById('Pare').checked,
      Friends : document.getElementById('FRIND').checked,
      Alone : document.getElementById('ALO').checked,
      Other_family: document.getElementById('OF').checked,
      Are_You_Currently_working : document.getElementById('AYCW').value,
      Do_you_have_difficulty_eating_or_drinking  : document.getElementById('eating').value,
      Video_Fluoroscopy : document.getElementById('VF').checked,
      VF_Receivedd_Report : document.getElementById('VRR').checked,
      Modified_Barium_Swallow : document.getElementById('MBS').checked,
      MBS_Received_Report : document.getElementById('MBSRR').checked,
      Fees : document.getElementById('fees').checked,
      Fees_Received_Report : document.getElementById('FRR').checked,
      BedSide_Swallow : document.getElementById('Bed_W').checked,
      BS_Received_Report : document.getElementById('BSRR').checked,
      Audiologist : document.getElementById('aud_log').checked,
      AL_Received_Report : document.getElementById('ALRR').checked,
      Otolaryngologist : document.getElementById('otol').checked,
      Otol_Received_Report : document.getElementById("ORR").checked,
      Neurologist : document.getElementById('neur').checked,
      Neurologist_Received_Report : document.getElementById('NRR').checked,
      Wear_Glasses : document.getElementById('WGS').value,
      Wears_Hearing_Aids : document.getElementById('WHA').value,
      Side : document.getElementById('WHAE').value,
      Understanding_Spoken_Language : document.getElementById('USL').checked,
      Reading: document.getElementById('readin').checked,
      Writing: document.getElementById('writein').checked,
      Speaking: document.getElementById('speakin').checked,
      Math: document.getElementById('mat').checked,
      Attention: document.getElementById('atten').checked,
      Memory: document.getElementById('memo').checked,
      Problem_solving: document.getElementById('PS').checked,
      None1: document.getElementById('none1').checked,
      Cooking: document.getElementById('cooki').checked,
      language: document.getElementById('langa').checked,
      Dressing: document.getElementById('dressi').checked,
      Phone_calls: document.getElementById('phcalls').checked,
      Tioleting: document.getElementById('Tlet').checked,
      Managing_Appiontments: document.getElementById('MAPP').checked,
      Telling_time: document.getElementById('TTe').checked,
      Transportation_or_driving: document.getElementById('TOD').checked,
      Walking: document.getElementById('walki').checked,
      Showering_or_personal_hygiene: document.getElementById('SOPH').checked,
      Grocery: document.getElementById('groc').checked,
      None2: document.getElementById('none2').checked,
      Speech_or_language_goals_or_expectionsfortherapy : document.getElementById('SLET').checked


    };

    Case_History_Adult.push(datas);
    console.log(JSON.stringify(Case_History_Adult));

  }


  const SendData = (d)=> {
    var case_his = JSON.stringify(Case_History_Adult);
    var articulation = JSON.stringify(Articulation);
    var recep_lang = JSON.stringify(Receptive_langauage);
    var expres_lang = JSON.stringify(Expressive_language);
    var fluen = JSON.stringify(Fluency);
    var voc = JSON.stringify(voice);
    var po = JSON.stringify(voice);
    var go = JSON.stringify(voice);


    $.ajax({
      url: "index.php",
      type : "POST",
      data:{
        case_history : case_his,
        articulation : articulation,
        recpective_lang : recep_lang,
        expressive_lang : expres_lang,
        fluency : fluen,
        voice : voc,
        poc: po,
        goals : go
      },
      success: function(){
        alert('ok');
      }
    });

  }







</script>
</head>
<body>
    <div>
      <div style="background-color: rgb(240, 240, 240); border-bottom: 2px solid rgb(0, 121, 149);">
        <div class="pl-3 pt-1 p/b-1">
          <h6>Eval Notes(Please save after each section)</h6>
        </div>
      </div>
      <div class="container-fluid p-0 m-0 pt-1">
        <ul class="tabs-choose">
          <li class="tablinks" onclick="openCity(event, 'Case')" id="defaultTab">Case Histroy-Adult</li>
          <li class="tablinks" onclick="openCity(event, 'Articulation')">Articulation</li>
          <li class="tablinks" onclick="openCity(event, 'Receptive')">Receptive Language</li>
          <li class="tablinks" onclick="openCity(event, 'Expressive')">Expressive Language</li>
          <li class="tablinks" onclick="openCity(event, 'Fluency')">Fluency</li>
          <li class="tablinks" onclick="openCity(event, 'Voice')">Voice</li>
          <li class="tablinks" onclick="openCity(event, 'POC')">POC</li>
          <li class="tablinks" onclick="openCity(event, 'Goals')">Goals</li>
        </ul>

        <div id="Case" class="tabcontent">
          <div class="content-one">
            <div class="card">
              <div class="card-header bg-header font-weight-bold">
                Case History
              </div>
              <form autocomplete="off" class="card-body bg-blue p-0">
                <div class="row">
                  <div class="col-md-3"><strong>Language (s) spoken at home</strong>
                    <div class="row">
                      <div class="col-md-4 p-0">
                        <div class="checkbox"><label><input id='engl' type="checkbox" value="English">
                            English
                          </label></div>
                        <div class="checkbox"><label><input id="spani" type="checkbox" value="Spanish">
                            Spanish
                          </label></div>
                      </div>
                      <div class="col-md-8 p-0">
                        <div class="form-group"><label for="usr" class="m-0">Other Languages</label>
                          <input id="oth_lang" type="text" class="form-control m-0"></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3"><strong>Who lives with you?</strong>
                    <div class="row">
                      <div class="checkbox"><label><input id="spo" type="checkbox" value="Spouse">
                          Spouse
                        </label></div>
                      <div class="checkbox"><label><input id="chil" type="checkbox" value="Child">
                          Child
                        </label></div>
                      <div class="checkbox"><label><input id='Pare' type="checkbox" value="Parents">
                          Parents
                        </label></div>
                      <div class="checkbox"><label><input id="FRIND" type="checkbox" value="Friends">
                          Friends
                        </label></div>
                      <div class="checkbox"><label><input id="ALO" type="checkbox" value="Alone">
                          Alone
                        </label></div>
                      <div class="checkbox"><label><input id="OF" type="checkbox" value="Other Family">
                          Other Family
                        </label></div>
                    </div>
                    <div class="form-group">
                      <!---->
                    </div>
                  </div>
                  <div class="col-md-3"><strong>Are you currently working?</strong>
                    <div class="form-group mt-2"><select id="AYCW" class="form-control">
                        <option value="No">No</option>
                        <option value="Yes">Yes</option>
                        <option value="Retired">Retired</option>
                      </select></div>
                  </div>
                  <div class="col-md-3"><strong>Do you have difficulty eating or drinking</strong>
                    <div class="row mt-2">
                      <div class="col-md-3 pl-0">
                        <div class="form-group"><select class="form-control pl-1 pr-0" id="eating" onchange="changeStatus()">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                          </select></div>
                      </div>
                      <div  class="col-md-9 pl-0 pr-0">
                        <div  id="eatingtext" class="form-group">
                          <input type="text" name="" maxlength="50" class="form-control">
                          <!-- <span class="badge badge-secondry float-right">0/50</span> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12"><strong>Test(s) Completed</strong></div>
                <div class="row">
                  <div class="col-md-3">
                    <div class="checkbox"><label><input id="VF" type="checkbox" value="Video Fluoroscopy">
                        Video Fluoroscopy
                      </label></div>
                    <div class="checkbox"><label><input id="VRR" type="checkbox" value="Video Fluoroscopy">
                        Received Report
                      </label></div>
                  </div>
                  <div class="col-md-3">
                    <div class="checkbox"><label><input id="MBS" type="checkbox" value="Modified Barium Swallow">
                        Modified Barium Swallow
                      </label></div>
                    <div class="checkbox"><label><input id="MBSRR" type="checkbox" value="Modified Barium Swallow">
                        Received Report
                      </label></div>
                  </div>
                  <div class="col-md-3">
                    <div class="checkbox"><label><input id="fees" type="checkbox" value="FEES">
                        FEES
                      </label></div>
                    <div class="checkbox"><label><input id="FRR" type="checkbox" value="FEES">
                        Received Report
                      </label></div>
                  </div>
                  <div class="col-md-3">
                    <div class="checkbox"><label><input id="Bed_W"type="checkbox" value="BedSide Swallow">
                        BedSide Swallow
                      </label></div>
                    <div class="checkbox"><label><input id="BSRR" type="checkbox" value="BedSide Swallow">
                        Received Report
                      </label></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6"><strong>General Health</strong>
                    <div class="form-group"><textarea maxlength="1000" class="form-control"></textarea> <span class="badge badge-secondry float-right">0/1000</span></div>
                  </div>
                  <div class="col-md-6"><strong>Surgeries</strong>
                    <div class="form-group"><textarea class="form-control"></textarea> <span maxlength="500" class="badge badge-secondry float-right">0/500</span></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3"><strong>Have You Received Any Speech Therapy Before</strong>
                    <div class="row mt-2">
                      <div class="col-md-3 pr-1 pl-0">
                        <div class="form-group"><select class="form-control pl-1 pr-0">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                          </select></div>
                      </div>
                      <div class="col-md-9 pl-0 pr-0">
                        <!---->
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3"><strong>Do You Have Difficulty Expressing Wants And Needs</strong>
                    <div class="row mt-2">
                      <div class="col-md-3 pr-1 pl-0">
                        <div class="form-group"><select class="form-control pl-1 pr-0">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                          </select></div>
                      </div>
                      <div class="col-md-9 pl-0 pr-0">
                        <!---->
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3"><strong>Do others find it difficult to understand you</strong>
                    <div class="row mt-2">
                      <div class="col-md-3 pr-1 pl-0">
                        <div class="form-group"><select class="form-control pl-1 pr-0">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                          </select></div>
                      </div>
                      <div class="col-md-9 pl-0 pr-0">
                        <!---->
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3"><strong>Do you have difficulty remembering things</strong>
                    <div class="row mt-2">
                      <div class="col-md-3 pr-1 pl-0">
                        <div class="form-group"><select class="form-control pl-1 pr-0">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                          </select></div>
                      </div>
                      <div class="col-md-9 pl-0 pr-0">
                        <!---->
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4"><strong>Do you have difficulty finding the words when speaking</strong>
                    <div class="row mt-2">
                      <div class="col-md-2 pr-1 pl-0">
                        <div class="form-group"><select class="form-control pl-1 pr-0">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                          </select></div>
                      </div>
                      <div class="col-md-10 pl-0 pr-0">
                        <!---->
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4"><strong>Do you have difficulty reading and/or writing?</strong>
                    <div class="row">
                      <div class="col-md-2 pr-1 pl-0">
                        <div class="form-group"><select class="form-control pl-1 pr-0">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                          </select></div>
                      </div>
                      <div class="col-md-10 pl-0 pr-0">
                        <!---->
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4"><strong>Has there been any changes to your voice</strong>
                    <div class="row mt-2">
                      <div class="col-md-2 pr-1 pl-0">
                        <div class="form-group"><select class="form-control pl-1 pr-0">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                          </select></div>
                      </div>
                      <div class="col-md-10 pl-0 pr-0">
                        <!---->
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6"><strong>Have you seen any of the following specialist?</strong>
                    <div class="row mb-0">
                      <div class="col-md-4">
                        <div class="checkbox"><label><input id="aud_log" type="checkbox" value="Audiologist">
                            Audiologist
                          </label></div>
                        <div class="checkbox"><label><input id="ALRR" type="checkbox" value="Audiologist">
                            Received Report
                          </label></div>
                      </div>
                      <div class="col-md-4">
                        <div class="checkbox"><label><input id="otol" type="checkbox" value="Otolaryngologist">
                            Otolaryngologist
                          </label></div>
                        <div class="checkbox"><label><input id='ORR' type="checkbox" value="Otolaryngologist">
                            Received Report
                          </label></div>
                      </div>
                      <div class="col-md-4">
                        <div class="checkbox"><label><input id="neur" type="checkbox" value="Neurologist">
                            Neurologist
                          </label></div>
                        <div class="checkbox"><label><input id="NRR" type="checkbox" value="Neurologist">
                            Received Report
                          </label></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3"><strong>Wear Glasses</strong>
                    <div class="form-group"><select id="WGS" class="form-control pl-1 pr-0">
                        <option value="No">No</option>
                        <option value="Yes">Yes</option>
                      </select></div>
                  </div>
                  <div class="col-md-3"><strong>Wears Hearing Aids</strong>
                    <div class="row">
                      <div class="col-md-3 pr-1 pl-0">
                        <div class="form-group"><select id="WHA" class="form-control pl-1 pr-0">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                          </select></div>
                      </div>
                      <div class="col-md-9 pl-0 pr-0">
                        <div class="form-group">
                        <select id="WHAE" class="form-control pl-1 pr-0">
                          <option value="Left">Left</option>
                          <option value="Right">Right</option>
                         <option value="Both Sides">Both Sides</option></select></div></div>>
                    </div>
                  </div>
                </div>
                <div class="col-md-12"><strong>In which of the following communication areas do you have difficulties</strong></div>
                <div class="row pl-1">
                  <div class="checkbox"><label><input id="USL" type="checkbox" value="Understanding Spoken Language">
                      Understanding Spoken Language
                    </label></div>
                  <div class="checkbox"><label><input id="readin" type="checkbox" value="Reading">
                      Reading
                    </label></div>
                  <div class="checkbox"><label><input id="writein" type="checkbox" value="Writing">
                      Writing
                    </label></div>
                  <div class="checkbox"><label><input id="speakin" type="checkbox" value="Speaking">
                      Speaking
                    </label></div>
                  <div class="checkbox"><label><input id="mat" type="checkbox" value="Math">
                      Math
                    </label></div>
                  <div class="checkbox"><label><input id="atten" type="checkbox" value="Attention">
                      Attention
                    </label></div>
                  <div class="checkbox"><label><input id="memo" type="checkbox" value="Memory">
                      Memory
                    </label></div>
                  <div class="checkbox"><label><input id="PS" type="checkbox" value="Problem Solving">
                      Problem Solving
                    </label></div>
                  <div class="checkbox"><label><input id="none1" type="checkbox" value="None">
                      None
                    </label></div>
                </div>
                <div class="col-md-12"><strong>In which of the following activities of daily living do you require assistance</strong></div>
                <div class="row pl-1">
                  <div class="checkbox"><label><input id="cooki" type="checkbox" value="Cooking">
                      Cooking
                    </label></div>
                  <div class="checkbox"><label><input id="langa"type="checkbox" value="Language">
                      Language
                    </label></div>
                  <div class="checkbox"><label><input id="dressi" type="checkbox" value="Dressing">
                      Dressing
                    </label></div>
                  <div class="checkbox"><label><input id="phcalls" type="checkbox" value="Phone Calls">
                      Phone Calls
                    </label></div>
                  <div class="checkbox"><label><input id="Tlet" type="checkbox" value="Toileting">
                      Toileting
                    </label></div>
                  <div class="checkbox"><label><input id="MAPP" type="checkbox" value="Managing Appointments">
                      Managing Appointments
                    </label></div>
                  <div class="checkbox"><label><input id="TTe" type="checkbox" value="Telling Time">
                      Telling Time
                    </label></div>
                  <div class="checkbox"><label><input id="TOD" type="checkbox" value="Transportation/Driving">
                      Transportation/Driving
                    </label></div>
                  <div class="checkbox"><label><input id="walki"type="checkbox" value="Walking">
                      Walking
                    </label></div>
                  <div class="checkbox"><label><input id="SOPH" type="checkbox" value="Showering/Personal Hygiene">
                      Showering/Personal Hygiene
                    </label></div>
                  <div class="checkbox"><label><input id="groc" type="checkbox" value="Grocery Shopping">
                      Grocery Shopping
                    </label></div>
                  <div class="checkbox"><label><input id="none2" type="checkbox" value="None">
                      None
                    </label></div>
                </div>
                <div class="col-md-12">
                  <grammarly-extension style="position: absolute; top: 0px; left: 0px; pointer-events: none;" class="_1KJtL"></grammarly-extension><strong>What are your speech/language goals/expectations for therapy</strong>
                  <div class="form-group"><textarea id="SLET" maxlength="500" class="form-control" spellcheck="false"></textarea> <span class="badge badge-secondry float-right">0/500</span></div>
                </div>
                <hr>
                <div class="col-md-12 text-center"><input id="case_history_submit" type="submit" class="btn btn-primary btn-sm mb-2"value="Save"></input></div>
              </form>
            </div>
          </div>
          <!---->
          <!---->
          <!---->
          <!---->
          <!---->
          <!---->
          <!---->
        </div>

        <div id="Articulation" class="tabcontent">
          <!---->
          <div class="content-two">
            <div class="card">
              <div class="card-header bg-header font-weight-bold">
                Articulation
              </div>
              <form autocomplete="off" class="card-body bg-blue p-0">
                <div class="row mt-1">
                  <div class="checkbox"><label><input id="arti_wnl" type="checkbox">
                      Within Normal Limits
                    </label></div>
                </div>
                <div class="row">
                  <div class="col-md-3"><strong>Sound Production Patterns</strong>
                    <div class="row">
                      <div class="checkbox"><label><input id="SPP"type="checkbox" value="Substitutions">
                          Substitutions
                        </label></div>
                      <div class="checkbox"><label><input id ="omis" type="checkbox" value="Omissions">
                          Omissions
                        </label></div> <br>
                      <div class="checkbox"><label><input id="distor" type="checkbox" value="Distortions">
                          Distortions
                        </label></div>
                    </div>
                  </div>
                  <div class="col-md-9"><strong>Explain sound production patterns</strong>
                    <div class="form-group"><input id="ESPP" type="text" style="width: 100%;"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3"><strong>Apraxia</strong>
                    <div class="row">
                      <div class="col-md-3 pr-1 pl-0">
                        <div class="form-group"><select id="apra" class="form-control pl-1 pr-0">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                          </select></div>
                      </div>
                      <div class="col-md-9 pl-0 pr-0">
                      <div class="form-group"><input id="apra_exp" type="text" required="required" name="" maxlength="200" class="form-control"> <span class="badge badge-secondry float-right">0/200</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3"><strong>Dysarthia</strong>
                    <div class="row">
                      <div class="col-md-3 pr-1 pl-0">
                        <div class="form-group"><select id="dysar" class="form-control pl-1 pr-0">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                          </select></div>
                      </div>
                      <div class="col-md-9 pl-0 pr-0">
                        <div class="form-group"><input id="dysar_exp" type="text" required="required" name="" maxlength="200" class="form-control"> <span class="badge badge-secondry float-right">0/200</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3"><strong>Disturbance Of Prosody</strong>
                    <div class="row">
                      <div class="col-md-3 pr-1 pl-0">
                        <div class="form-group"><select id="DOP" class="form-control pl-1 pr-0">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                          </select></div>
                      </div>
                      <div class="col-md-9 pl-0 pr-0">
                        <div class="form-group"><input id="DOPE" type="text" required="required" name="" maxlength="200" class="form-control"> <span class="badge badge-secondry float-right">0/200</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3"><strong>Stimulability</strong>
                    <div class="row">
                      <div class="col-md-3 pr-1 pl-0">
                        <div class="form-group"><select id="stimul" class="form-control pl-1 pr-0">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                          </select></div>
                      </div>
                      <div class="col-md-9 pl-0 pr-0">
                        <div class="form-group"><input id="stimul_exp" type="text" required="required" name="" maxlength="200" class="form-control"> <span class="badge badge-secondry float-right">0/200</span></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2"><strong>Intelligibility</strong>
                    <div class="form-group"><select id="intelli" class="form-control">
                        <option  value="">--SELECT--</option>
                        <option value="select_context">Select Context</option>
                        <option value="context_known">Context known</option>
                        <option value="context_unknown">Context Unknown</option>
                      </select></div>
                  </div>
                  <div class="col-md-2"><strong>Select Listener</strong>
                    <div class="form-group"><select id="SL" class="form-control">
                        <option  value="">--SELECT--</option>
                        <option value="select_listener">Select Listener</option>
                        <option value="familiar_listener">Familiar Listener</option>
                        <option value="unfamiliar_listener">Unfamiliar Listener</option>
                      </select></div>
                  </div>
                  <div class="col-md-2"><strong>Percent</strong>
                    <div class="form-group"><input id="perc" type="text" class="form-control"></div>
                  </div>
                  <div class="col-md-3"><strong>Oral Motor Examination</strong>
                    <div class="form-group"><select id="OME" class="form-control pl-1 pr-0">
                        <option value="Within Normal Limit">Within Normal Limit</option>
                        <option value="Cutficultes">Cutficultes</option>
                      </select></div>
                  </div>
                  <div class="col-md-3"><strong>Explain Oral Motor Examination</strong>
                    <div class="form-group"><textarea id="EOME" required="required" name="" maxlength="200" class="form-control"></textarea> <span class="badge badge-secondry float-right">0/200</span></div>
                  </div>
                </div>
                <div class="col-md-12"><strong>Types of phonological processes</strong></div>
                <div class="row">
                  <div class="col-md-9">
                    <div class="row">
                      <div class="checkbox"><label><input id="bac" type="checkbox" value="Backing">
                          Backing
                        </label></div>
                      <div class="checkbox"><label><input id="fron" type="checkbox" value="Fronting">
                          Fronting
                        </label></div>
                      <div class="checkbox"><label><input id="stopp" type="checkbox" value="Stopping">
                          Stopping
                        </label></div>
                      <div class="checkbox"><label><input id="ICD" type="checkbox" value="Initial Consonant Deletion">
                          Initial Consonant Deletion
                        </label></div>
                      <div class="checkbox"><label><input id="FCD" type="checkbox" value="Final Consonant Deletion">
                          Final Consonant Deletion
                        </label></div>
                      <div class="checkbox"><label><input id="CR" type="checkbox" value="Cluster Reduction">
                          Cluster Reduction
                        </label></div>
                      <div class="checkbox"><label><input id="arti_oth" type="checkbox">
                          Other
                        </label></div>
                    </div>
                  </div>
                  <!---->
                </div>
                <div class="col-md-12"><strong>Results</strong><br>
                  <div class="form-group"><textarea id="arti_result" maxlength="500" class="form-control"></textarea> <span class="badge badge-secondry float-right">0/500</span></div>
                </div>
                <hr>
                <div class="col-md-12 text-center"><input id="articul_submit" type="submit" value="Save"class="btn btn-primary btn-sm mb-2"></button></div>
              </form>
            </div>
          </div>
          <!---->
          <!---->
          <!---->
          <!---->
          <!---->
          <!---->
        </div>
        <div id="Receptive" class="tabcontent">
          <div class="content-three">
            <div class="card">
              <div class="card-header bg-header font-weight-bold">
                Receptive Language
              </div>
              <form id="RcpForm" name="RcpForm" method="post" autocomplete="off" class="card-body bg-blue p-0">
                <div class="row mt-1">
                  <div class="checkbox"><label><input id="recep_lang_wnl" name="limit" type="checkbox">
                      Within Normal Limits
                    </label></div>
                </div>
                <div class="row">
                  <div class="col-md-3"><strong for="follow_dir">Following Direction</strong>
                    <div class="form-group"><select id="follow_dir" class="form-control">
                        <option value="">--SELECT--</option>
                        <option value="one_step">One Step</option>
                        <option value="two_step">Two Step</option>
                        <option value="three_step">Three Step</option>
                      </select></div>
                  </div>
                  <div class="col-md-3"><strong for="repeat_no">Repeating Number</strong>
                    <div class="form-group"><select id="repeat_no" class="form-control">
                        <option value="">--SELECT--</option>
                        <option value="1_Digit">1 Digit</option>
                        <option value="2_Digit">2 Digit</option>
                        <option value="3_Digit">3 Digit</option>
                        <option value="4_Digit">4 Digit</option>
                        <option value="5_Digit">5 Digit</option>
                      </select></div>
                  </div>
                  <div class="col-md-6"><strong for="repeatsentence">Repeating Sentences </strong>
                    <div class="form-group"><textarea type="repeat_sentence" id="repeatsentence" maxlength="500" class="form-control"></textarea> <span class="badge badge-secondry float-right">0/500</span></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6"><strong for="listen_para">Listening to Short Paragraphs and Retail </strong>
                    <div class="form-group"><textarea type="text" id="listen_para" maxlength="500" class="form-control"></textarea> <span class="badge badge-secondry float-right">0/500</span></div>
                  </div>
                  <div class="col-md-6"><strong for="compre_para">Comprehension of Paragraphs (Listen and Answer Questions) </strong>
                    <div class="form-group"><textarea type="text" id="compre_para" maxlength="500" class="form-control"></textarea> <span class="badge badge-secondry float-right">0/500</span></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6"><strong for="read_compre">Reading Comprehension</strong>
                    <div class="form-group"><textarea type="text" id="read_compre" name="read_compre" maxlength="500" class="form-control"></textarea> <span class="badge badge-secondry float-right">0/500</span></div>
                  </div>
                  <div class="col-md-6"><strong for="result">Result</strong>
                    <div class="form-group"><textarea type="text" id="recep_lan_result" name="result" maxlength="500" class="form-control"></textarea> <span class="badge badge-secondry float-right">0/500</span></div>
                  </div>
                </div>
                <hr>
                <div class="col-md-12 text-center"><input type="submit" class="btn btn-primary btn-sm mb-2" value="save" name="butsave1" id="recep_lang_submit"></input></div>
              </form>
            </div>
          </div>
        </div>
        <div id="Expressive" class="tabcontent">
          <!---->
          <!---->
          <!---->
          <div class="content-four">
            <div class="card">
              <div class="card-header bg-header font-weight-bold">
                Expressive Language
              </div>
              <form autocomplete="off" class="card-body bg-blue p-0">
                <div class="row mt-1">
                  <div class="checkbox"><label><input id="Exp_lan_wnl" type="checkbox">
                      Within Normal Limits
                    </label></div>
                </div>
                <div class="col-md-12"><strong for="informal_obser">Informal Observations in Conversation </strong>
                  <div class="form-group"><textarea type="text" id="informal_obser" maxlength="500" class="form-control"></textarea> <span class="badge badge-secondry float-right">0/500</span></div>
                </div>
                <div class="row">
                  <div class="col-md-4"><strong for="naming_category">Naming in categories </strong>
                    <div class="form-group"><textarea type="text" id="naming_category" maxlength="500" class="form-control"></textarea> <span class="badge badge-secondry float-right">0/500</span></div>
                  </div>
                  <div class="col-md-4"><strong for="categorization">Categorization </strong>
                    <div class="form-group"><textarea type="text" id="categorization" maxlength="500" class="form-control"></textarea> <span class="badge badge-secondry float-right">0/500</span></div>
                  </div>
                  <div class="col-md-4"><strong for="wrd_find_difficulties">Word Finding Difficulties</strong>
                    <div class="form-group"><textarea type="text" id="wrd_find_difficulties" maxlength="500" class="form-control"></textarea> <span class="badge badge-secondry float-right">0/500</span></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3"><strong for="syntax">Syntax</strong>
                    <div class="form-group"><select id="syntax" class="form-control">
                        <option value="">--SELECT--</option>
                        <option value="non_verbal">Nonverbal</option>
                        <option value="single_word">Single Word</option>
                        <option value="phrases">Phrases</option>
                        <option value="sentences">Sentences</option>
                        <option value="conversation">conversation</option>
                      </select></div>
                  </div>
                  <div class="col-md-3"><strong for="des_syntax">Describe Syntax </strong>
                    <div class="form-group"><input type="text" id="des_syntax" class="form-control"></div>
                  </div>
                  <div class="col-md-3"><strong for="morphology">Morphology</strong> <select id="morphology" class="form-control">
                      <option value="">--SELECT--</option>
                      <option value="adequate_grammatical_skills">Adequate Grammatical Skills</option>
                      <option value="grammatical_error">Grammatical Error</option>
                    </select></div>
                  <div class="col-md-3"><strong for="morphology">Mean Length Utterance</strong>
                    <div class="form-group"><input type="text" id="mean_len_utter" class="form-control"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6"><strong for="pragmatics">Pragmatics <span class="text-danger">*</span></strong>
                    <div class="row">
                      <div class="checkbox"><label><input id="top_maint"type="checkbox" value="Topic Maintenance">
                          Topic Maintenance
                        </label></div>
                      <div class="checkbox"><label><input id="initial_conve" type="checkbox" value="Initial Conversation">
                          Initial Conversation
                        </label></div>
                      <div class="checkbox"><label><input id="AEC" type="checkbox" value="Appropriate Eye Contact">
                          Appropriate Eye Contact
                        </label></div>
                      <div class="checkbox"><label><input id="BSL" type="checkbox" value="Basic Social Language">
                          Basic Social Language
                        </label></div>
                      <div class="checkbox"><label><input id="AAFCAR" type="checkbox" value="Asks Appropriately For Clarification and Repetition">
                          Asks Appropriately For Clarification and Repetition
                        </label></div>
                      <div class="checkbox"><label><input id="oth" type="checkbox">
                          Other
                        </label></div>
                      <div class="form-group"><input id="oth_exp" type="text" required="required" class="form-control"></div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <grammarly-extension style="position: absolute; top: 0px; left: 0px; pointer-events: none;" class="_1KJtL"></grammarly-extension><strong for="explain_pragmatics">Explain Pragmatics</strong>
                    <div class="form-group"><textarea id="explain_pragmatics" maxlength="500" class="form-control" spellcheck="false"></textarea> <span class="badge badge-secondry float-right">0/500</span></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <grammarly-extension style="position: absolute; top: 0px; left: 0px; pointer-events: none;" class="_1KJtL"></grammarly-extension><strong for="written_expression">Written Expression</strong>
                    <div class="form-group"><textarea id="written_expression" maxlength="500" class="form-control" spellcheck="false"></textarea> <span class="badge badge-secondry float-right">0/500</span></div>
                  </div>
                  <div class="col-md-6">
                    <grammarly-extension style="position: absolute; top: 0px; left: 0px; pointer-events: none;" class="_1KJtL"></grammarly-extension><strong for="result">Result</strong>
                    <div class="form-group"><textarea id="Expre_lang_result" maxlength="500" class="form-control" spellcheck="false"></textarea> <span class="badge badge-secondry float-right">0/500</span></div>
                  </div>
                </div>
                <hr>
                <div class="col-md-12 text-center"><input id="Expressive_language_submit" type="submit" value="Save" class="btn btn-primary btn-sm mb-2"></input></div>
              </form>
            </div>
          </div>
          <!---->
          <!---->
          <!---->
          <!---->
        </div>
        <div id="Fluency" class="tabcontent">
          <!---->
          <!---->
          <!---->
          <!---->
          <div class="content-four">
            <div class="card">
              <div class="card-header bg-header font-weight-bold">
                Fluency
              </div>
              <form autocomplete="off" class="card-body bg-blue p-0">
                <div class="row mt-1">
                  <div class="checkbox"><label><input id="fluency_wnl" type="checkbox">
                      Within Normal Limits
                    </label></div>
                </div>
                <div class="row">
                  <div class="col-md-6"><strong for="dysfluencies">Dysfluencies</strong> <select id="dysfluencies" class="form-control">
                      <option value="Within Normal Limits">Within Normal Limits</option>
                      <option value="Mid">Mid</option>
                      <option value="Moderate">Moderate</option>
                      <option value="Several">Several</option>
                    </select></div>
                  <div class="col-md-6">
                    <div class="row">
                      Types of Dysfluencies
                      <div class="checkbox"><label><input id="phrase_rep" type="checkbox" value="Phrase Repetitions">
                          Phrase Repetitions
                        </label></div>
                      <div class="checkbox"><label><input id="sound_rep" type="checkbox" value="Sound Repetitions">
                          Sound Repetitions
                        </label></div>
                      <div class="checkbox"><label><input id="single_word_rep" type="checkbox" value="Single-Word Repetitions">
                          Single-Word Repetitions
                        </label></div>
                      <div class="checkbox"><label><input id="FOI" type="checkbox" value="Fillers/Interjections">
                          Fillers/Interjections
                        </label></div>
                      <div class="checkbox"><label><input id="prolong" type="checkbox" value="Prolongations">
                          Prolongations
                        </label></div>
                      <div class="checkbox"><label><input id="bloc" type="checkbox" value="Blocks">
                          Blocks
                        </label></div>
                      <div class="checkbox"><label><input id="PWR" type="checkbox" value="Part-Word Repetitions">
                          Part-Word Repetitions
                        </label></div>
                      <div class="checkbox"><label><input id="revi" type="checkbox" value="Revisions">
                          Revisions
                        </label></div>
                      <div class="checkbox"><label><input id="NFW" type="checkbox" value="Not Finishing Word">
                          Not Finishing Word
                        </label></div>
                    </div>
                  </div>
                  <div class="col-md-6"><strong for="sec_mannerism">Secondary Mannerisms/Physical movements</strong>
                    <div class="row">
                      <div class="col-md-2 pr-1 pl-0">
                        <div class="form-group"><select id="sec_mannerism" class="form-control">
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                          </select></div>
                      </div>
                      <div class="col-md-10 pl-0 pr-0">
                        <div class="form-group"><input id="sec_mannerism_exp" type="text" required="required" name="" maxlength="200" class="form-control"> <span class="badge badge-secondry float-right">0/200</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <grammarly-extension style="position: absolute; top: 0px; left: 0px; pointer-events: none;" class="_1KJtL"></grammarly-extension><strong>Result</strong>
                    <div class="form-group">
                      <textarea id="Fluency_result" maxlength="500" class="form-control" spellcheck="false"></textarea> <span class="badge badge-secondry float-right">0/500</span></div>
                  </div>
                </div>
                <hr>
                <div class="col-md-12 text-center"><input id="fluencysubmit" type="submit" value="Save" class="btn btn-primary btn-sm mb-2"></input></div>
              </form>
            </div>
          </div>
          <!---->
          <!---->
          <!---->
        </div>
        <div id="Voice" class="tabcontent">
          <!---->
          <!---->
          <!---->
          <!---->
          <!---->
          <div class="content-four">
            <div class="card">
              <div class="card-header bg-header font-weight-bold">
                Voice
              </div>
              <form autocomplete="off" class="card-body bg-blue p-0">
                <div class="row mt-1">
                  <div class="checkbox"><label><input id="voice_wnl" type="checkbox">
                      Within Normal Limits
                    </label></div>
                </div>
                <div class="col-md-12"><strong>Are the following areas of voice found to be a typical?</strong></div>
                <div class="row">
                  <div class="col-md-3"><strong>Volume</strong>
                    <div class="row">
                      <div class="col-md-4 pl-0">
                        <div class="form-group"><select id="volume" class="form-control">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                          </select></div>
                      </div>
                      <div class="col-md-8 pl-0">
                        <div class="form-group "><input id="volYes" type="text" maxlength="200" required="required" class="form-control"> <span class="badge badge-secondry float-right">0/200</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3"><strong>Quality</strong>
                    <div class="row">
                      <div class="col-md-4 pl-0">
                        <div class="form-group"><select id="quality" class="form-control">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                          </select></div>
                      </div>
                      <div class="col-md-8 pl-0">
                        <div class="form-group "><input id="qualityexp" type="text" maxlength="200" required="required" class="form-control"> <span class="badge badge-secondry float-right">0/200</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3"><strong>Resonance</strong>
                    <div class="row">
                      <div class="col-md-4 pl-0">
                        <div class="form-group"><select id="resonance" class="form-control">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                          </select></div>
                      </div>
                      <div class="col-md-8 pl-0">
                        <div class="form-group "><input id="resonanceexp" type="text" maxlength="200" required="required" class="form-control"> <span class="badge badge-secondry float-right">0/200</span></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3"><strong>Pitch</strong>
                    <div class="row">
                      <div class="col-md-4 pl-0">
                        <div class="form-group"><select id="pitch" class="form-control">
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                          </select></div>
                      </div>
                      <div class="col-md-8 pl-0">
                        <div class="form-group "><input id="pitchexp" type="text" maxlength="200" required="required" class="form-control"> <span class="badge badge-secondry float-right">0/200</span></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <grammarly-extension style="position: absolute; top: 0px; left: 0px; pointer-events: none;" class="_1KJtL"></grammarly-extension><strong for="behavioural_com">Behavioural Components</strong>
                     <textarea type="text"
                      id="behavioural_com" maxlength="500" class="form-control" spellcheck="false"></textarea> <span class="badge badge-secondry float-right">0/500</span>
                  </div>
                  <div class="col-md-6">
                    <grammarly-extension style="position: absolute; top: 0px; left: 0px; pointer-events: none;" class="_1KJtL"></grammarly-extension><strong for="result">Result</strong>
                     <textarea type="text" id="result" maxlength="500"
                      class="form-control" spellcheck="false"></textarea> <span class="badge badge-secondry float-right">0/500</span>
                  </div>
                </div>
                <hr>
                <div class="col-md-12 text-center"><input id="voicesubmit" type="submit" class="btn btn-primary btn-sm mb-2" value="save"></input></div>
              </form>
            </div>
          </div>
          <!---->
          <!---->
        </div>
        <div id="POC" class="tabcontent">
          <!---->
          <!---->
          <!---->
          <!---->
          <!---->
          <!---->
          <div class="content-four">
            <div class="card">
              <div class="card-header bg-header font-weight-bold">
                POC
              </div>
              <form autocomplete="off" class="card-body bg-blue p-0">
                <div class="col-md-12"><strong for="diagnosis">Diagnosis</strong>
                  <div class="form-group"><select id="diagnosis" required="required" class="form-control">
                      <option value="F80_9(Developmental_disorder_of_speech_and_language)">F80.9(Developmental disorder of speech and language)</option>
                      <option value="F84_0(Autistic_Disorder)">F84.0(Autistic Disorder)</option>
                      <option value="f80_0(phonological_disorder)">F80.0(Phonological Disorder)</option>
                      <option value="f40_1(expressive_language_disorder)">F40.1(Expressive Language Disorder)</option>
                      <option value="f47_9(speech_distrubances)">F47.9(Speech Distrubances)</option>
                    </select></div>
                </div>
                <div class="row">
                  <div class="col-md-9"><strong for="area_need">Areas of need</strong>
                    <div class="row">
                      <div class="checkbox"><label><input id='ST_Not_Indicated' type="checkbox" value="ST Not Indicated">
                          ST Not Indicated
                        </label></div>
                      <div class="checkbox"><label><input id="AnT" type="checkbox" value="Articulation/Phonology">
                          Articulation/Phonology
                        </label></div>
                      <div class="checkbox"><label><input id="Rec_lang" type="checkbox" value="Receptive Language">
                          Receptive Language
                        </label></div>
                      <div class="checkbox"><label><input id="Expre_lang" type="checkbox" value="Expressive Language">
                          Expressive Language
                        </label></div>
                      <div class="checkbox"><label><input id="fluen" type="checkbox" value="Fluency">
                          Fluency
                        </label></div>
                      <div class="checkbox"><label><input id="voc" type="checkbox" value="Voice">
                          Voice
                        </label></div>
                    </div>
                  </div>
                  <div class="col-md-3"><strong for="prognosis">Prognosis </strong>
                    <div class="form-group"><select id='prognosis' class="form-control">
                        <option value="">--SELECT--</option>
                        <option value="Good">Good</option>
                        <option value="Far">Far</option>
                        <option value="Poor">Poor</option>
                      </select></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4"><strong for="frequency">Frequency </strong>
                    <div class="form-group"><select id="frequency" class="form-control">
                        <option value="">--SELECT--</option>
                        <option value="1_times">1 Times</option>
                        <option value="2_times">2 Times</option>
                        <option value="3_times">3 Times</option>
                        <option value="4_times">4 Times</option>
                        <option value="5_times">5 Times</option>
                        <option value="6_times">6 Times</option>
                        <option value="7_times">7 Times</option>
                      </select></div>
                  </div>
                  <div class="col-md-4"><strong for="per_week_for">Per Week for</strong>
                    <div class="form-group"><select id="weeks" class="form-control">
                        <option value="">--SELECT--</option>
                        <option value="1_weeks">1 weeks</option>
                        <option value="2_weeks">2 weeks</option>
                        <option value="3_weeks">3 weeks</option>
                        <option value="4_weeks">4 weeks</option>
                        <option value="5_weeks">5 weeks</option>
                        <option value="6_weeks">6 weeks</option>
                        <option value="7_weeks">7 weeks</option>
                        <option value="8_weeks">8 weeks</option>
                        <option value="9_weeks">9 weeks</option>
                        <option value="10_weeks">10 weeks</option>
                        <option value="11_weeks">11 weeks</option>
                        <option value="12_weeks">12 weeks</option>
                      </select></div>
                  </div>
                  <div class="col-md-4"><strong for="plan_care_discussed">This Plan of Care was Discussed with the </strong>
                    <div class="form-group"><select id="plan_care_discussed" class="form-control">
                        <option value="">--SELECT--</option>
                        <option value="Client">Client</option>
                        <option value="Parent">Parent</option>
                        <option value="Caretaker">CareTaker</option>
                      </select></div>
                  </div>
                  <div class="col-md-4"><strong for="data_of_service">Date of Service <span class="text-danger">*</span></strong>
                    <div class="vdp-datepicker">
                      <div class="">
                        <!----> <input id='data_of_service' type="text" name="datepicker" readonly="readonly" autocomplete="off">
                        <!---->
                      </div>
                      <div class="vdp-datepicker__calendar" style="display: none;">
                        <header><span class="prev">&lt;</span> <span class="day__month_btn up">Aug 2020</span> <span class="next">&gt;</span></header>
                        <div class=""><span class="cell day-header">Sun</span><span class="cell day-header">Mon</span><span class="cell day-header">Tue</span><span class="cell day-header">Wed</span><span class="cell day-header">Thu</span><span
                            class="cell day-header">Fri</span><span class="cell day-header">Sat</span> <span class="cell day blank"></span><span class="cell day blank"></span><span class="cell day blank"></span><span
                            class="cell day blank"></span><span class="cell day blank"></span><span class="cell day blank"></span><span class="cell day weekend sat">1</span><span class="cell day weekend sun">2</span><span
                            class="cell day">3</span><span class="cell day">4</span><span class="cell day">5</span><span class="cell day">6</span><span class="cell day">7</span><span class="cell day weekend sat">8</span><span
                            class="cell day weekend sun">9</span><span class="cell day today">10</span><span class="cell day">11</span><span class="cell day">12</span><span class="cell day">13</span><span class="cell day">14</span><span
                            class="cell day weekend sat">15</span><span class="cell day weekend sun">16</span><span class="cell day">17</span><span class="cell day">18</span><span class="cell day">19</span><span class="cell day">20</span><span
                            class="cell day">21</span><span class="cell day weekend sat">22</span><span class="cell day weekend sun">23</span><span class="cell day">24</span><span class="cell day">25</span><span class="cell day">26</span><span
                            class="cell day">27</span><span class="cell day">28</span><span class="cell day weekend sat">29</span><span class="cell day weekend sun">30</span><span class="cell day">31</span></div>
                      </div>
                      <div class="vdp-datepicker__calendar" style="display: none;">
                        <header><span class="prev">&lt;</span> <span class="month__year_btn up">2020</span> <span class="next">&gt;</span></header> <span class="cell month">January</span><span class="cell month">February</span><span
                          class="cell month">March</span><span class="cell month">April</span><span class="cell month">May</span><span class="cell month">June</span><span class="cell month">July</span><span class="cell month">August</span><span
                          class="cell month">September</span><span class="cell month">October</span><span class="cell month">November</span><span class="cell month">December</span>
                      </div>
                      <div class="vdp-datepicker__calendar" style="display: none;">
                        <header><span class="prev">&lt;</span> <span>2020 - 2029</span> <span class="next">&gt;</span></header> <span class="cell year">2020</span><span class="cell year">2021</span><span class="cell year">2022</span><span
                          class="cell year">2023</span><span class="cell year">2024</span><span class="cell year">2025</span><span class="cell year">2026</span><span class="cell year">2027</span><span class="cell year">2028</span><span
                          class="cell year">2029</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4"><strong for="from_time">Time From</strong>
                    <div class="form-group"><input type="time" id="from_time" class="form-control"></div>
                  </div>
                  <div class="col-md-4"><strong for="to_time">To TimeZone:PST</strong>
                    <div class="form-group"><input type="time" id="to_time" class="form-control"></div>
                  </div>
                </div>
                <div class="col-md-12"><strong for="summ_recom">Summary and Recommendations</strong>
                  <div class="form-group"><textarea id="summ_recom" maxlength="500" class="form-control"></textarea> <span class="badge badge-secondry float-right">0/500</span></div>
                </div>
                <hr>
                <div class="col-md-12 text-center">
                <input type="submit" class="btn btn-primary btn-sm mb-2" value="Save" name="butsave" id="pocsubmit"></input></div>
              </form>
            </div>
          </div>
          <!---->
        </div>

        <div id="Goals" class="tabcontent">
          <div class="content-four">
            <div class="card">
              <div class="card-header bg-header font-weight-bold">
                Goals - Must have atleast 2 Goals
              </div>
              <form id="fupForm" name="fupForm" method="post" autocomplete="off" class="card-body bg-blue p-0">
                <div class="row">
                  <div class="col-md-6"><strong for="goal_1">Goal 1 <span class="text-danger">*</span></strong>
                    <div class="form-group"><textarea type="text" id="goal_1" name="goal_1" required="required" maxlength="300" class="form-control"></textarea> <span class="badge badge-secondry float-right">0/300</span></div>
                  </div>
                  <div class="col-md-6"><strong for="goal_2">Goal 2 <span class="text-danger">*</span></strong>
                    <div class="form-group"><textarea type="text" id="goal_2" name="goal_2" required="required" maxlength="300" class="form-control"></textarea> <span class="badge badge-secondry float-right">0/300</span></div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6"><strong for="goal_3">Goal 3</strong>
                    <div class="form-group"><textarea type="text" id="goal_3" name="goal_3" maxlength="300" class="form-control"></textarea> <span class="badge badge-secondry float-right">0/300</span></div>
                  </div>
                  <div class="col-md-6"><strong for="goal_4">Goal 4</strong>
                    <!-- <grammarly-extension style="position: absolute; top: 0px; left: 0px; pointer-events: none;" class="_1KJtL"></grammarly-extension> -->
                    <div class="form-group"><textarea type="text" id="goal_4" name="goal_4"  maxlength="300" class="form-control" spellcheck="false"></textarea> <span class="badge badge-secondry float-right">0/300</span></div>
                  </div>
                </div>
                <div class="col-md-6"><strong for="goal_5">Goal 5</strong>
                  <div class="form-group"><textarea type="text" id="goal_5" name="goal_5" maxlength="300" class="form-control"></textarea> <span class="badge badge-secondry float-right">0/300</span></div>
                </div>
                <hr>
                <div class="row text-center">
                  <div class="col-md-6 text-center"><input type="submit" class="btn btn-primary btn-sm mb-2" value="Save" name="butsave" id="goalssubmit"></input></div>
                  <div class="col-md-6 text-center">
                    <form action="http://careaba.com/careABA_C1/clinic_note/assets/php/CaseHistoryAdult/exportpdf.php" method="POST">
                      <input type="hidden" name="lock_date" id="lock_date" value="08/10/2020">
                       <input id="sign_submit" type="submit" class="btn btn-success btn-sm mb-2"  value="sign &amp; lock">
                     </input></form>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>




</body>
<grammarly-extension class="_1KJtL"></grammarly-extension>

</html>
