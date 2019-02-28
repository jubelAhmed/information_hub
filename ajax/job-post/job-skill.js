let rootAllSkill = document.getElementById("idSkillsList");



function addNewSkill() {
    var skill = document.getElementById("idSkillInput");
  
    if (skill.value == "") {
      alert("fill up skill field.");
      skill.focus();
      return;
    }
    let div = document.createElement("div");
  
    div.classList.add(
      "p-2",
      "text-center",
      "shadow-sm",
      "bg-white",
      "rounded",
      "m-1"
    );
  
    var p = document.createElement("p");
    p.id = "skill-" + n++;
    p.innerHTML = skill.value;
    p.setAttribute("name", skill.value);
    p.setAttribute("class", "allSkill");
    p.classList.add("pt-3");
    p.style.display = "inline-block;";
    skill.value = "";
  
    var i = document.createElement("i");
    i.classList.add("fa", "fa-minus-circle", "fa-1x", "pl-1");
  
    p.appendChild(i);
    div.appendChild(p);
    i.addEventListener("click", function() {
      rootAllSkill.removeChild(div);
    });
  
    console.log(div);
     .appendChild(div);
  }