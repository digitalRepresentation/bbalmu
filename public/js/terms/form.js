// 이용약관 및 개인정보취급방침 체크박스
const agreeCheckboxes = document.querySelectorAll(".agree_checkbox");

// 전송하기 버튼
const regSubmit = document.getElementById("reg_submit");

// 체크박스 상태 확인 및 버튼 활성화/비활성화
function checkAgreement() {
    const allChecked = Array.from(agreeCheckboxes).every((checkbox) => checkbox.checked);
    regSubmit.disabled = !allChecked;
}


// 체크박스를 클릭했을 때
agreeCheckboxes.forEach((checkbox) => {
    checkbox.addEventListener("click", checkAgreement);
})
