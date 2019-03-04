let rootSpecialSkill = document.getElementById("idSpecialSkill");
let n = 1;
function addNewSkill() {
  var skill = document.getElementById("idSpecialSkillInput");

  if (skill.value == "") {
    alert("fill up skill field.");
    skill.focus();
    return;
  }

  let span = document.createElement("span");
  span.id = skill.value + n;
  let skillTemplate = ` <div class="badge " style="height: 30px; padding-top: 7px; font-size: 16px; margin-right: 16px;  margin-top: 10px;">
    <span class="allSpecialSkills">${skill.value}</>
    <i onclick="deleteChild('${
      span.id
    }')" class="cancel-btn fa fa-times badge-close-feature" style="display: hidden; color: transparent;"></i>
    </div>`;
  n++;

  span.innerHTML = skillTemplate;

  skill.value = "";

  rootSpecialSkill.appendChild(span);
}

function deleteChild(span_id) {
  rootSpecialSkill.removeChild(document.getElementById(span_id));
}
