<?php
function isExist($var){
  if(isset($var)){
    echo $var;
}

if(isset($_POST['submit'])){


$options = array(
'Name' 	=> FILTER_SANITIZE_STRING,
'Last_Name' 	=> FILTER_SANITIZE_STRING,
'mail' 		=> FILTER_VALIDATE_EMAIL,
'phone' 		=> FILTER_SANITIZE_NUMBER_INT,
'url' 		=> FILTER_SANITIZE_URL,
'subject' 		=> FILTER_SANITIZE_STRING,
'message' 		=> FILTER_SANITIZE_STRING,
'pays'   =>FILTER_SANITIZE_STRING,
'genre' =>FILTER_SANITIZE_STRING);

  $result = filter_input_array(INPUT_POST, $options);
  $checkresult=[];
  if(isset($_POST['subject'])){
  foreach ($_POST['subject'] as $value)
    $checkresult[]= filter_var($value,FILTER_SANITIZE_STRING);
}
  $result[]=$checkresult;
  print_r($_POST);

  $name=trim($result['Name']);
  $lastname=trim($result['Last_Name']);
  $email=trim($result['email']);
  $massage=trim($result['message']);
  $genre=trim($result['genre']);
  $pays=trim($result['pays']);

  if(isset($name) AND !empty($same)) {
    $verif_name="ok";
  }else{
    $verif_name='Nope';
  }
if(isset($email) AND !empty($email)){
  $verif_email='ok';
}else{
  $verif_email='nope';
}
if(isset($genre) AND !empty($genre)){
  $verif_genre='ok';
}else{
  $verif_genre='nope';
}
if($verif_name=='ok' AND $erif_lastname=='ok' AND $verif_email=='ok'AND $erif_message=='ok' AND $verif_pays=='ok'){
  $text="Nom :$name $lastname";
  $text .="Pays:$pays"
  $text .="Message: $message";
  foreach ($_POST['Subject'] as $value) {
    $title .="$value";
  }
  echo 'test';
  mail("felicien.manzi@gmail.com","Titre",$text);
  header("Location: merci.php?name=$name");
}
}
?>
<!DOCTYPE html>
 <html>
 <head>
   <style>
   .error{
     background: red;
     color: #fff;
   }
   </style>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width,initial-scale.0">
   <meta HTTP-http-equiv="X-UA-Compatible" content="ie=edge">
  </head>
  <body>

<div class="container">
  <header>
    <h1>HACKERS POULETTE</h1>
  </header>
  <main>
    <form action="index2.php" method="POST">
      <fieldset>
        <h3>Coordonées</h3>
        <p><label for="input1">Name</label><input type="text" id="input1" name="Name" value="<?=isExist($name);?>">
              <?php if($verif_name == "nok"){
                echo "<span class='error'> Le champ nom n\'est pas correct";
              }  ?> ">
              </p>
        <p><label for="input2">Last_Name</label><input type="text" id="input2" name="Last_Name"></p>
        <p><label for="email">email</label><input type="email" id="email" name="email"></p>
        <h3>Genre</h3>
        <div class="radio"><span><label for="genre1">Homme</label><input type="radio" name="genre" id="genre1"></span><span><label for="genre2">Femme</label><input type="radio" name="genre" id="genre2"></span></div>
        <div class="pays">
          <h3>Pays</h3>
          <select name="pays" id="pays">
            <option value="BE">Belgique</option>
            <option value="">pays2</option>
            <option value="">pays3</option>
            <option value="">pays4</option>
            <option value="">pays5</option>
            <option value="">pays6</option>
            <option value="">pays7</option>
            <option value="">pays8</option>
            <option value="">pays9</option>
            <option value="">pays10</option>
            <option value="">pays11</option>
            <option value="">pays12</option>
            <option value="">pays13</option>
            <option value="">pays14</option>
            <option value="">pays15</option>
            <option value="">pays16</option>
            <option value="">pays17</option>
            <option value="">pays18</option>
            <option value="">pays19</option>
            <option value="">pays20</option>
            <option value="">pays21</option>
            <option value="">pays22</option>
            <option value="">pays23</option>
            <option value="">pays24</option>
            <option value="">pays25</option>
            <option value="">pays26</option>
            <option value="">pays27</option>
            <option value="">pays28</option>
            <option value="">pays29</option>
            <option value="">pays30</option>
            <option value="">pays31</option>
            <option value="">pays32</option>
            <option value="">pays33</option>
            <option value="">pays34</option>
            <option value="">pays35</option>
            <option value="">pays36</option>
            <option value="">pays37</option>
            <option value="">pays38</option>
            <option value="">pays39</option>
            <option value="">pays40</option>
            <option value="">pays41</option>
            <option value="">pays42</option>
            <option value="">pays43</option>
            <option value="">pays44</option>
            <option value="">pays45</option>
            <option value="">pays46</option>
            <option value="">pays47</option>
            <option value="">pays48</option>
            <option value="">pays49</option>
            <option value="">pays50</option>
            <option value="">pays51</option>
            <option value="">pays52</option>
            <option value="">pays53</option>
            <option value="">pays54</option>
            <option value="">pays55</option>
            <option value="">pays56</option>
            <option value="">pays57</option>
            <option value="">pays58</option>
            <option value="">pays59</option>
            <option value="">pays60</option>
            <option value="">pays61</option>
            <option value="">pays62</option>
            <option value="">pays63</option>
            <option value="">pays64</option>
            <option value="">pays65</option>
            <option value="">pays66</option>
            <option value="">pays67</option>
            <option value="">pays68</option>
            <option value="">pays69</option>
            <option value="">pays70</option>
            <option value="">pays71</option>
            <option value="">pays72</option>
            <option value="">pays73</option>
            <option value="">pays74</option>
            <option value="">pays75</option>
            <option value="">pays76</option>
            <option value="">pays77</option>
            <option value="">pays78</option>
            <option value="">pays79</option>
            <option value="">pays80</option>
            <option value="">pays81</option>
            <option value="">pays82</option>
            <option value="">pays83</option>
            <option value="">pays84</option>
            <option value="">pays85</option>
            <option value="">pays86</option>
            <option value="">pays87</option>
            <option value="">pays88</option>
            <option value="">pays89</option>
            <option value="">pays90</option>
            <option value="">pays91</option>
            <option value="">pays92</option>
            <option value="">pays93</option>
            <option value="">pays94</option>
            <option value="">pays95</option>
            <option value="">pays96</option>
            <option value="">pays97</option>
            <option value="">pays98</option>
            <option value="">pays99</option>
            <option value="">pays100</option>
            <option value="">pays101</option>
            <option value="">pays102</option>
            <option value="">pays103</option>
            <option value="">pays104</option>
            <option value="">pays105</option>
            <option value="">pays106</option>
            <option value="">pays107</option>
            <option value="">pays108</option>
            <option value="">pays109</option>
            <option value="">pays110</option>
            <option value="">pays111</option>
            <option value="">pays112</option>
            <option value="">pays113</option>
            <option value="">pays114</option>
            <option value="">pays115</option>
            <option value="">pays116</option>
            <option value="">pays117</option>
            <option value="">pays118</option>
            <option value="">pays119</option>
            <option value="">pays120</option>
            <option value="">pays121</option>
            <option value="">pays122</option>
            <option value="">pays123</option>
            <option value="">pays124</option>
            <option value="">pays125</option>
            <option value="">pays126</option>
            <option value="">pays127</option>
            <option value="">pays128</option>
            <option value="">pays129</option>
            <option value="">pays130</option>
            <option value="">pays131</option>
            <option value="">pays132</option>
            <option value="">pays133</option>
            <option value="">pays134</option>
            <option value="">pays135</option>
            <option value="">pays136</option>
            <option value="">pays137</option>
            <option value="">pays138</option>
            <option value="">pays139</option>
            <option value="">pays140</option>
            <option value="">pays141</option>
            <option value="">pays142</option>
            <option value="">pays143</option>
            <option value="">pays144</option>
            <option value="">pays145</option>
            <option value="">pays146</option>
            <option value="">pays147</option>
            <option value="">pays148</option>
            <option value="">pays149</option>
            <option value="">pays150</option></select>
        </div>
      </fieldset>
    <fieldset>
      <div class="checkbox">
        <h3>Sujet</h3>
        <span><label for="sujet1">Sujet 1</label><input type="checkbox" id="sujet1" name="subject[]"></span>
        <span><label for="sujet2">Sujet 2</label><input type="checkbox" id="sujet2" name="subject[]"></span>
        <span><label for="sujet3">Sujet 3</label><input type="checkbox" id="sujet3" name="subject[]"></span>
        <span><label for="sujet4">Sujet 4</label><input type="checkbox" id="sujet4" name="subject[]"></span>
        <span><label for="sujet5">Sujet 5</label><input type="checkbox" id="sujet5" name="subject[]"></span>
        <div class="message">
          <h3>Message</h3>
          <textarea name="message" id="message" cols="30" rows="10"></textarea>
        </div>
      </div>
    </fieldset>
    <button name="submit" type="submit">"Envoyer</button>
    </form>
  </main>
</div>
<footer>
  <p>2017 - Hackers Poulette ™ </p>
</footer>
</body>
</html>
