<!doctype html>
<html>
<head>
  <meta charset="utf-8" />
  <title>래더</title>
  <script src="https://cdn.jsdelivr.net/gh/msikma/screp-js@latest/dist/index.js"></script>
  <style>
  body {
    margin: 8px;
  }
  .tool {
    display: flex;
    gap: 20px;
  }
  .result-container {
    flex: 1 1 60%;
    border: 1px silver solid;
    min-height: 20em;
    border-radius: 0.5em;
  }
  .result-container p {
    text-align: center;
    font-weight: bold;
  }
  #result {
    white-space: pre-wrap;
    padding: 1em;
    padding-top: 0;
    box-sizing: border-box;
    font-family: monospace;
  }
  #result > div p {
  }
  #result > div textarea {
    min-height: 30em;
    overflow: scroll;
    box-sizing: border-box;
    width: 100%;
  }
  #dragdrop {
    border: 3px silver dashed;
    box-sizing: border-box;
    cursor: pointer;
    flex: 1 1 40%;
    font-weight: bold;
    height: calc(30em - 23px);
    padding: 1em;
    text-align: center;
  }
  #dragdrop.dropping {
    border-color: black;
  }
  </style>
</head>
<body>
  
  <div class="tool">
    <div id="dragdrop">리플레이 파일 여기에 넣어주세요</div>
  </div>
</body>
<script>
/** Converts a Blob object (or in our case, a File object which implements Blob) into a Uint8Array. */
async function toUint8Array(blob) {
  return new Uint8Array(await new Response(blob).arrayBuffer())
}

/** Processes a single .rep file. */
async function processRep(file) {
  const buffer = await toUint8Array(file)
  try {
    // console.time('screp buffer parsing')
    const res = await Screp.parseBuffer(buffer)
    // console.timeEnd('screp buffer parsing')
    console.log('게임 내 명령어 리스트:', res.Commands);
    console.log('parsing succeeded:', res);
    console.log('방제목:', res.Header.Title);
    console.log('[1팀] 1번째 플레이어 id:',res.Header.Players[0].Name);
    console.log('[1팀] 1번째 플레이어 종족:',res.Header.Players[0].Race.Name);
    console.log('[1팀] 2번째 플레이어 id:',res.Header.Players[1].Name);
    console.log('[1팀] 2번째 플레이어 종족:',res.Header.Players[1].Race.Name);
    console.log('[1팀] 3번째 플레이어 id:',res.Header.Players[2].Name);
    console.log('[1팀] 3번째 플레이어 종족:',res.Header.Players[2].Race.Name);
    console.log('[2팀] 1번째 플레이어 id:',res.Header.Players[3].Name);
    console.log('[2팀] 1번째 플레이어 종족:',res.Header.Players[3].Race.Name);
    console.log('[2팀] 2번째 플레이어 id:',res.Header.Players[4].Name);
    console.log('[2팀] 2번째 플레이어 종족:',res.Header.Players[4].Race.Name);
    console.log('[2팀] 3번째 플레이어 id:',res.Header.Players[5].Name);
    console.log('[2팀] 3번째 플레이어 종족:',res.Header.Players[5].Race.Name);
    console.log('승리팀:',res.Computed.WinnerTeam);
    
    return `<div><p>${file.name} (${file.size} bytes)</p><textarea>${JSON.stringify(res, null, 2)}</textarea></div>`
  }
  catch (err) {
    console.log('parsing failed:', err)
    return `<b>${err}</b>`
  }
}

/** Area the results will be shown in. */
const result = document.querySelector('#result')

/** Creates a drop area for dragging .rep files in. */
const dragdrop = document.querySelector('#dragdrop')
dragdrop.ondragenter = function(e) {
  if (e.target !== this) {
    return
  }
}

dragdrop.ondragover = function(e) {
  this.classList.add('dropping')
  e.preventDefault()
}

dragdrop.ondragleave = function(e) {
  if (e.target !== this) {
    return
  }
  this.classList.remove('dropping')
}

dragdrop.ondrop = async function(e) {
  e.preventDefault()
  this.classList.remove('dropping')

  const html = await Promise.all([...e.dataTransfer.files].map(file => processRep(file)))
  alert(html);
  // result.innerHTML = html.join('<hr>')
}

dragdrop.onclick = function(e) {
  const upload = document.createElement('input')
  upload.setAttribute('type', 'file')
  upload.setAttribute('multiple', 'multiple')
  upload.setAttribute('accept', '.rep')
  upload.style.display = 'none'
  upload.onchange = async function() {
    const html = await Promise.all([...this.files].map(file => processRep(file)))
    // result.innerHTML = html.join('<hr>')
    this.parentNode.removeChild(this)
  }
  upload.onclick = function(e) {
    e.stopPropagation()
  }
  this.appendChild(upload)
  upload.click()
}
</script>
</html> 