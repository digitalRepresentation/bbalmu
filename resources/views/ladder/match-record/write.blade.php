<!DOCTYPE html>
<html lang="en">
<head>
@include('layouts.head')
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://cdn.jsdelivr.net/gh/msikma/screp-js@latest/dist/index.js"></script>
</head>
<body>
@include('layouts.header')
  <section class="p-5 mx-auto w-75 border border-light">
    <h3 class="ms-3">■래더점수 기록하기</h3>
    @if ($errors->has('rep_file'))
      <div class="alert alert-danger" role="alert">
        {{ $errors->first('rep_file') }}
      </div>
    @endif


    <form id="replayForm" action="{{ url('/ladder/match-record/') }}" onsubmit="handleSubmit(event)" method="POST" enctype="multipart/form-data">
      @csrf
      <label for="title" class="form-label">rep파일 업로드</label>
      <input type="file" id="fileInput" name="rep_file" accept=".rep" required>
      @can('ladder')
      <input type="submit" class="btn btn-secondary float-end" value="전적기록" />
      @endcan
    </form>
  </section>    

  <script>
    async function toUint8Array(blob) {
      return new Uint8Array(await new Response(blob).arrayBuffer());
    }

    async function processRep(file) {
      const buffer = await toUint8Array(file);
      try {
        const formData = new FormData();
        const res = await Screp.parseBuffer(buffer);

        // 폼 요소를 가져옵니다.
        let form = document.getElementById('replayForm');

        const inputValues = [
          { name: 'match_date' , value: res.Header.StartTime.toISOString()},
          { name: 'title' , value: res.Header.Title},
          { name: 'map_name' , value: res.Header.Map},
          { name: 'player1_id' , value: res.Header.Players[0].Name},
          { name: 'player1_race_id' , value: res.Header.Players[0].Race.Name},
          { name: 'player2_id' , value: res.Header.Players[1].Name},
          { name: 'player2_race_id' , value: res.Header.Players[1].Race.Name},
          { name: 'player3_id' , value: res.Header.Players[2].Name},
          { name: 'player3_race_id' , value: res.Header.Players[2].Race.Name},
          { name: 'player4_id' , value: res.Header.Players[3].Name},
          { name: 'player4_race_id' , value: res.Header.Players[3].Race.Name},
          { name: 'player5_id' , value: res.Header.Players[4].Name},
          { name: 'player5_race_id' , value: res.Header.Players[4].Race.Name},
          { name: 'player6_id' , value: res.Header.Players[5].Name},
          { name: 'player6_race_id' , value: res.Header.Players[5].Race.Name},
          { name: 'winning_team' , value: res.Computed.WinnerTeam},
        ]


        // JSON 데이터의 각 항목을 hidden input 요소로 추가합니다.
        inputValues.forEach(function(item) {
          let hiddenInput = document.createElement('input');
          hiddenInput.type = 'hidden';
          hiddenInput.name = item.name;
          hiddenInput.value = item.value;
          form.appendChild(hiddenInput);
      });
    } catch (error) {
        alert("파일이 깨져 있습니다. 관리자에게 문의해주세요.");
        event.preventDefault(); 
    }      
  }

  // 폼 제출 시 실행할 함수
  async function handleSubmit(event) {
      event.preventDefault(); // 폼 제출을 막습니다.
      const fileInput = document.getElementById('fileInput');
      if (fileInput.files.length > 0) {
        await processRep(fileInput.files[0]);
        document.getElementById('replayForm').submit();
      }
  }

  </script>
  @include('layouts.footer')
</body>
</html>

