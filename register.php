<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Finlandica:ital,wght@0,400..700;1,400..700&display=swap&family=Karla:ital,wght@0,200..800;1,200..800&family=Nova+Square&family=PT+Serif:ital,wght@0,400;0,700;1,400;1,700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <title>Register - ByteQuest2024</title>
</head>
<body>
    <section id="new">
        <img src="images/regi1.jpg" alt="girl" id="photo">
        <form action="action.php" method="post" id="myForm">
            <h2 id="red">Register</h2>
            <div id="nameinput">
              <div id="coolinput1">
                <label for="input" class="text">Name:</label>
                <input required="" type="text" placeholder="Enter your full name" name="name" id="name" class="input">
            </div>
          <div id="input22">
            <div id="coolinput2">
              <label for="input" class="text">Name:</label>
              <input type="text" placeholder="Teammate 2" name="name2" id="name2" class="input">
            </div>
          </div>
            </div>
<div id="nameinput22">
            <div id="nameinput2">
              <div id="coolinput3">
                <label for="input" class="text">Name:</label>
                <input type="text" placeholder="Teammate 3" name="name3" id="name3" class="input">
            </div>
            <div id="coolinput4">
              <label for="input" class="text">Name:</label>
              <input type="text" placeholder="Teammate 4" name="name4" id="name4" class="input">
          </div>
            </div>
</div>

            <div id="nameinput3">
            <div id="coolinput5">
                <label for="input" class="text">Email:</label>
                <input required="" type="email" placeholder="Enter your email" name="email" id="email" class="input">
            </div>
            <div id="coolinput5">
                <label for="input" class="text">Phone:</label>
                <input required="" type="tel" placeholder="Enter 10 digit phone number" pattern="[6789][0-9]{9}" name="phone" id="phone" class="input">
            </div>
            </div>
            <div class="coolinput">
              <label for="input" class="text">College name:</label>
              <input required="" type="text" placeholder="Enter your college name" name="college" id="college" class="input">
          </div>

            <p id="selecteve">Please select your events</p>
<div id="entire">
        <div id="wholediv">
            <div id="subdiv">
                <div id="check">
                <input type="checkbox" name="BitByBit" value="200" class="ui-checkbox" id="BitByBit">
                <p>Bit By Bit</p>
                </div>
                <div id="check">
                    <input type="checkbox" name="CodeFusion" value="200" class="ui-checkbox" id="CodeFusion">
                    <p>Code Fusion</p>
                    </div>
                    <div id="check">
                        <input type="checkbox" name="PixelBattle" value="500" class="ui-checkbox" id="PixelBattle">
                        <p>Pixel Battle</p>
                        </div>
                        <div id="check">
                            <input type="checkbox" name="TechTitans" value="200" class="ui-checkbox" id="TechTitans">
                            <p>Tech Titans</p>
                            </div>
                            <div id="check">
                                <input type="checkbox" name="LensesLines" value="200" class="ui-checkbox" id="LensesLines">
                                <p>Lenses & Lines</p>
                                </div>
            </div>
            <div id="subdiv">
                <div id="check">
                <input type="checkbox" name="Quizbytes" value="200" class="ui-checkbox" id="Quizbytes">
                <p>Quizbytes</p>
                </div>
                <div id="check">
                    <input type="checkbox" name="Artbits" value="100" class="ui-checkbox" id="Artbits">
                    <p>Artbits</p>
                    </div>
                    <div id="check">
                        <input type="checkbox" name="IdeaIgnite" value="500" class="ui-checkbox" id="IdeaIgnite">
                        <p>Idea Ignite</p>
                        </div>
                        <div id="check">
                            <input type="checkbox" name="CipherEscape" value="500" class="ui-checkbox" id="CipherEscape">
                            <p>Cipher Escape</p>
                            </div>
                            
            </div>
        </div>
        <div>
             <input type="text" name="amount" id="amount">
            <p id="selecteve1">Total Amount Payable : ₹<span id="checkedCount">0</span>/- </p> 
        </div>
        <input type="submit" class="button" value="Pay and Register">
          
    </div>
        </form>
    </section>
<div id="geniswhole"></div>
<div id="genins">
    <h1 id="genhead">General Instructions</h1>
    <ul id="listhead">
      <li>After Payment, please upload your fee reciept in the Google Form.</li>
      <li>You can only select events with the same number of teammates at a time ie. if you are selecting a quad event with four teammates, you can only select other quad events at the same time.</li>
      <li>Please make sure you enter the correct amount while paying.</li>
      <li>You can always come back and register if you wish to enroll for more events.</li>
    </ul>
    <button class="button" onclick="diappear()" style="width: 6em;">OK</button>
</div>




    <script>
    window.onload = function() {
      const checkbox1 = document.getElementById('CodeFusion');
      const checkbox11 = document.getElementById('BitByBit');
      const checkbox2 = document.getElementById('PixelBattle');
      const checkbox3 = document.getElementById('TechTitans');
      const checkbox4 = document.getElementById('Quizbytes');
      const checkbox44 = document.getElementById('LensesLines');
      const checkbox55 = document.getElementById('Artbits');
      const checkbox5 = document.getElementById('IdeaIgnite');
      const checkbox6 = document.getElementById('CipherEscape');
      const inputContainer1 = document.getElementById('input22');
      const inputContainer2 = document.getElementById('nameinput22');
      const inputContainer3 = document.getElementById('coolinput1');
      const inputContainer4 = document.getElementById('coolinput2');
      const inputContainer5 = document.getElementById('coolinput3');
      const inputContainer6 = document.getElementById('coolinput4');
      const name2 = document.getElementById('name2');
      const name3 = document.getElementById('name3');
      const name4 = document.getElementById('name4');

      
      checkbox1.addEventListener('change', function() {
          if (checkbox1.checked) {
              inputContainer1.style.display = 'block';
              checkbox11.disabled= true;
              checkbox2.disabled= true;
              checkbox3.disabled= true;
              // checkbox4.disabled= true;
              checkbox44.disabled= true;
              checkbox5.disabled= true;
              checkbox55.disabled= true;
              checkbox6.disabled= true;
              setInputWidth();
              name2.setAttribute('required', true);
          } else {
            if (!checkbox4.checked){
            inputContainer1.style.display = 'none';
            checkbox11.disabled= false;
            checkbox2.disabled= false;
            checkbox3.disabled= false;
            // checkbox4.disabled= false;
            checkbox5.disabled= false;
            checkbox6.disabled= false;
            checkbox44.disabled= false;
            checkbox55.disabled= false;
            inputContainer3.style.width = '24em';
            name2.removeAttribute('required');
            }
          }
      });
      checkbox2.addEventListener('change', function() {
          if (checkbox2.checked) {
              inputContainer1.style.display = 'block';
              inputContainer2.style.display = 'block';
              setInputWidth();
              checkbox11.disabled= true;
              checkbox1.disabled= true;
              // checkbox3.disabled= true;
              checkbox4.disabled= true;
              checkbox44.disabled= true;
              // checkbox5.disabled= true;
              checkbox55.disabled= true;
              // checkbox6.disabled= true;
              name2.setAttribute('required', true);
              name3.setAttribute('required', true);
              name4.setAttribute('required', true);
              setInputWidth();
          } else {
            if (!checkbox3.checked && !checkbox5.checked && !checkbox6.checked){
            inputContainer1.style.display = 'none';
            inputContainer2.style.display = 'none';
            inputContainer3.style.width = '24em';
            name2.removeAttribute('required');
            name3.removeAttribute('required');
            name3.removeAttribute('required');
            checkbox11.disabled= false;
            checkbox1.disabled= false;
            // checkbox3.disabled= false;
            checkbox4.disabled= false;
            // checkbox5.disabled= false;
            // checkbox6.disabled= false;
            checkbox44.disabled= false;
            checkbox55.disabled= false;
            }
          }
      });
      checkbox3.addEventListener('change', function() {
          if (checkbox3.checked) {
              inputContainer1.style.display = 'block';
              inputContainer2.style.display = 'block';
              setInputWidth();
              checkbox11.disabled= true;
              checkbox1.disabled= true;
              // checkbox2.disabled= true;
              checkbox4.disabled= true;
              checkbox44.disabled= true;
              // checkbox5.disabled= true;
              checkbox55.disabled= true;
              // checkbox6.disabled= true;
              name2.setAttribute('required', true);
              name3.setAttribute('required', true);
              name4.setAttribute('required', true);
          } else {
            if (!checkbox2.checked && !checkbox5.checked && !checkbox6.checked){
            inputContainer1.style.display = 'none';
            inputContainer2.style.display = 'none';
            inputContainer3.style.width = '24em';
            name2.removeAttribute('required');
            name3.removeAttribute('required');
            name3.removeAttribute('required');
            checkbox11.disabled= false;
            checkbox1.disabled= false;
            // checkbox2.disabled= false;
            checkbox4.disabled= false;
            // checkbox5.disabled= false;
            // checkbox6.disabled= false;
            checkbox44.disabled= false;
            checkbox55.disabled= false;
            }
          }
      });
      checkbox4.addEventListener('change', function() {
          if (checkbox4.checked) {
              inputContainer1.style.display = 'block';
              setInputWidth();
              checkbox11.disabled= true;
              // checkbox1.disabled= true;
              checkbox2.disabled= true;
              checkbox3.disabled= true;
              checkbox44.disabled= true;
              checkbox5.disabled= true;
              checkbox55.disabled= true;
              checkbox6.disabled= true;
              name2.setAttribute('required', true);
          } else {
            if (!checkbox1.checked){
            inputContainer1.style.display = 'none';
            inputContainer3.style.width = '24em';
            name2.removeAttribute('required');
            checkbox11.disabled= false;
            // checkbox1.disabled= false;
            checkbox2.disabled= false;
            checkbox3.disabled= false;
            checkbox5.disabled= false;
            checkbox6.disabled= false;
            checkbox44.disabled= false;
            checkbox55.disabled= false;
            }
          }
      });
      checkbox5.addEventListener('change', function() {
          if (checkbox5.checked) {
              inputContainer1.style.display = 'block';
              inputContainer2.style.display = 'block';
              setInputWidth();
              checkbox11.disabled= true;
              checkbox1.disabled= true;
              // checkbox2.disabled= true;
              // checkbox3.disabled= true;
              checkbox44.disabled= true;
              checkbox4.disabled= true;
              checkbox55.disabled= true;
              // checkbox6.disabled= true;
              name2.setAttribute('required', true);
              name3.setAttribute('required', true);
              name4.setAttribute('required', true);
          } else {
            if (!checkbox3.checked && !checkbox2.checked && !checkbox6.checked){
            inputContainer1.style.display = 'none';
            inputContainer2.style.display = 'none';
            inputContainer3.style.width = '24em';
            checkbox11.disabled= false;
            checkbox1.disabled= false;
            // checkbox2.disabled= false;
            // checkbox3.disabled= false;
            checkbox4.disabled= false;
            // checkbox6.disabled= false;
            checkbox44.disabled= false;
            checkbox55.disabled= false;
            name2.removeAttribute('required');
            name3.removeAttribute('required');
            name3.removeAttribute('required');
            }
          }
      });
      checkbox6.addEventListener('change', function() {
          if (checkbox6.checked) {
              inputContainer1.style.display = 'block';
              inputContainer2.style.display = 'block';
              setInputWidth();
              checkbox11.disabled= true;
              checkbox1.disabled= true;
              // checkbox2.disabled= true;
              // checkbox3.disabled= true;
              checkbox44.disabled= true;
              checkbox4.disabled= true;
              checkbox55.disabled= true;
              // checkbox5.disabled= true;
              name2.setAttribute('required', true);
              name3.setAttribute('required', true);
              name4.setAttribute('required', true);
          } else {
            if (!checkbox3.checked && !checkbox5.checked && !checkbox2.checked){
            inputContainer1.style.display = 'none';
            inputContainer2.style.display = 'none';
            inputContainer3.style.width = '24em';
            checkbox11.disabled= false;
            checkbox1.disabled= false;
            // checkbox2.disabled= false;
            // checkbox3.disabled= false;
            checkbox4.disabled= false;
            // checkbox5.disabled= false;
            checkbox44.disabled= false;
            checkbox55.disabled= false;
            name2.removeAttribute('required');
            name3.removeAttribute('required');
            name3.removeAttribute('required');
            }
          }
      });
      checkbox11.addEventListener('change', function() {
          if (checkbox11.checked) {
              checkbox6.disabled= true;
              checkbox1.disabled= true;
              checkbox2.disabled= true;
              checkbox3.disabled= true;
              checkbox4.disabled= true;
              checkbox5.disabled= true;
          } else {
            if (!checkbox11.checked && !checkbox44.checked && !checkbox55.checked){
            checkbox6.disabled= false;
            checkbox1.disabled= false;
            checkbox2.disabled= false;
            checkbox3.disabled= false;
            checkbox4.disabled= false;
            checkbox5.disabled= false;
            }
          }
      });
      checkbox44.addEventListener('change', function() {
          if (checkbox44.checked) {
              checkbox6.disabled= true;
              checkbox1.disabled= true;
              checkbox2.disabled= true;
              checkbox3.disabled= true;
              checkbox4.disabled= true;
              checkbox5.disabled= true;
          } else {
            if (!checkbox11.checked && !checkbox44.checked && !checkbox55.checked){
            checkbox6.disabled= false;
            checkbox1.disabled= false;
            checkbox2.disabled= false;
            checkbox3.disabled= false;
            checkbox4.disabled= false;
            checkbox5.disabled= false;
            }
          }
      });
      checkbox55.addEventListener('change', function() {
          if (checkbox55.checked) {
              checkbox6.disabled= true;
              checkbox1.disabled= true;
              checkbox2.disabled= true;
              checkbox3.disabled= true;
              checkbox4.disabled= true;
              checkbox5.disabled= true;
          } else {
            if (!checkbox11.checked && !checkbox44.checked && !checkbox55.checked){
            checkbox6.disabled= false;
            checkbox1.disabled= false;
            checkbox2.disabled= false;
            checkbox3.disabled= false;
            checkbox4.disabled= false;
            checkbox5.disabled= false;
            }
          }
      });

      function setInputWidth() {
            // Check if viewport width is less than or equal to 600px (mobile)
            if (window.innerWidth <= 600) {
              inputContainer3.style.width = '9.5em'; // Set width to 9em
              inputContainer4.style.width = '9.5em';
              inputContainer5.style.width = '9.5em'; // Set width to 9em
              inputContainer6.style.width = '9.5em';
            } else {
              inputContainer3.style.width = '11.5em'; // Reset width to default
              inputContainer4.style.width = '11.5em';
              inputContainer5.style.width = '11.5em'; // Reset width to default
              inputContainer6.style.width = '11.5em';
            }
        }

    
        // Call setInputWidth function on window resize
        // window.addEventListener('resize', setInputWidth);
    };
  </script>



    <script>
      // Get all checkboxes
      const checkboxes = document.querySelectorAll('input[type="checkbox"]');
      const checkedCount = document.getElementById('checkedCount');
      const amountCount = document.getElementById('amount');
    
      // Function to update checked count
      function updateCheckedCount() {
        let count = 0;
        checkboxes.forEach(checkbox => {
          if (checkbox.checked) {
            count += parseInt(checkbox.value); // Add checkbox value to count
          }
        });
        checkedCount.textContent = count;
        amountCount.value = count;
      }
    
      // Add event listener to each checkbox
      checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', updateCheckedCount);
      });
    
      // Update count on page load
      updateCheckedCount();
    </script>
      <!-- <script>
        document.addEventListener('DOMContentLoaded', function() {
          // Check if the URL has the checkbox query parameter
          const urlParams = new URLSearchParams(window.location.search);
          if (urlParams.has('checkbox') && urlParams.get('checkbox') !== '') {
            // Get the checkbox id from the URL parameter
            var checkboxId = urlParams.get('checkbox');
            
            // Get the checkbox element and check it
            var checkbox = document.getElementById(checkboxId);
            if (checkbox) {
              checkbox.checked = true;
              updateCheckedCount();
            } else {
              console.error('Checkbox with id ' + checkboxId + ' not found');
            }
          }
        });
        </script> -->

        <script>
          const instruction = document.getElementById("genins");
          const instruction2 = document.getElementById("geniswhole");
          function diappear(){
            instruction.style.scale = "0.7";
            setTimeout(()=>{
              instruction.style.opacity = "0";
              instruction2.style.opacity = "0";
             } ,500);
             setTimeout(()=>{
              instruction.style.display = "none";
              instruction2.style.display = "none";
             } ,1000);
          }
        </script>

        <script>
            const form = document.getElementById('myForm');
          
            form.addEventListener('submit', function(event) {
              const checkboxes = form.querySelectorAll('input[type="checkbox"]');
              let atLeastOneChecked = false;
          
              checkboxes.forEach(checkbox => {
                if (checkbox.checked) {
                  atLeastOneChecked = true;
                }
              });
          
              if (!atLeastOneChecked) {
                event.preventDefault();
                alert('Please select atleast one event before  submitting!');
              }
            });
          </script>
</body>
</html>