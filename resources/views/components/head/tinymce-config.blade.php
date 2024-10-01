<script src="https://cdn.tiny.cloud/1/nh9e8u1ef3q5tirl4q4dv9c0d9vk1qvu179j8fjn2nnhd0s3/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
<script>
  tinymce.init({
    selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
    plugins: 'code table lists image',
    images_upload_url: '/upload/image',  // 이미지 업로드를 처리할 서버 URL
    language: 'ko_KR',      // 언어 설정
    toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table | image'
  });
</script>