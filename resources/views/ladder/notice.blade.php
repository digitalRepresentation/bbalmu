<!DOCTYPE html>
<html lang="en">
<head>
@include('layouts.head')
<x-head.tinymce-config/>
</head>
<body>
@include('layouts.header')
  <section class="p-5 mx-auto w-75 border border-light">
    <div>
      <h3 class="ms-3">■래더 공지사항</h3>
      <div class="bg-primary text-white p-3">래더게임 반드시 읽어주세요.</div>
      
      <div class="border-top border-light p-3 bt-5">
        <p>■래더경기 설명</p>
            <ol>
            <li>3vs3으로 게임을 진행하며 1팀 2팀 각각 3명 점수의 평균으로 래더 경기를 진행합니다.</li>
            <li>가중치는 20점 입니다. 동일한 점수일 경우에 승리시 10점 획득하며 패배시 10을 잃습니다.</li>
            <li>리플레이 파일을 올리면 자동으로 기록해줍니다. 올리기 위해서는 아이디와 권한이 필요합니다. 권한은 3040-Zombie에게 문의해주세요.</li>
            </ol>
            <p>&nbsp;</p>
            <p>■래더경기 방법</p>
            <ol>
            <li>래더 경기 방제는 "3040래더"를 붙여주세요.</li>
            <li><a href="../../tiers">3040티어</a>에 들어가 있는 3040 닉네임만 사용 가능합니다. 존재하지 않을 시에는 3040-Zombie에게 문의 부탁드립니다.</li>
            <li><strong>리플레이 파일 중복</strong>된 것을 올리지 말아주세요.</li>
            <li>3vs3 경기만 가능합니다.</li>
            <li>깨진 리플레이 파일은 사용할 수 없습니다.</li>
            </ol>
            <p>&nbsp;</p>
            <p>■경기 규칙</p>
            <ol>
            <li>PPP, PPT, PPZ, PTZ로 게임을 진행하며 동족전만 가능합니다. (정확한 실력 체크를 위한 랜덤은 불가능입니다.)</li>
            <li>티어는 동티어~1점 차이로 게임을 진행하며, 2점 이상 차이가 나는 경우는 상호 협의하에 진행이 가능합니다.</li>
            <li>25분전, 룰은 3040룰과 동일합니다.</li>
            </ol>
            <p>&nbsp;</p>
            <p>■래더맵[download]</p>
            <p><a href="../../storage/maps/3040 빨무 대회용 내전.scm">3040 빨무 대회용 내전.scm</a></p>

      </div>

      
    </div>
  </section>    
  @include('layouts.footer')
</body>
</html>

