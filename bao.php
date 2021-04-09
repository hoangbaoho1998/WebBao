<!DOCTYPE html>
<html>
<head>
    <title>List of school</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div id="top-bar" align="center">Death List</div>
			<div align="center" class="tab">
  			<button class="tablinks" onclick="openCity(event, 'HCMUT')">HCMUT</button>
  			<button class="tablinks" onclick="openCity(event, 'HCMUTE')">HCMUTE</button>
  			<button class="tablinks" onclick="openCity(event, 'FPT')">FPT</button>
            <button class="tablinks" onclick="openCity(event, 'RMIT')">RMIT</button>
            <button class="tablinks" onclick="openCity(event, 'BTEC')">BTEC</button>
			</div>
        <div id="HCMUT" class="tabcontent">
        <h3>Bach Khoa</h3>
        <img class = "featured-image" src= "logo/bachkhoa.png" style="width:400px;height:500px;" >
        <p>Trường Đại học Bách khoa (Ho Chi Minh City University of Technology) là trường đại học chuyên ngành kỹ thuật đầu ngành tại Việt Nam, thành viên của hệ thống Đại học Quốc gia, được xếp vào nhóm đại học trọng điểm quốc gia Việt Nam. Tiền thân là Trung tâm Kỹ thuật Quốc gia được thành lập từ năm 1957, đến ngày 27/10/1976, Thủ tướng Phạm Văn Đồng ký Quyết định số 426/TTg đổi tên trường Đại học Kỹ thuật Phú Thọ thành trường Đại học Bách Khoa TP. Hồ Chí Minh.</p>
    </div>
    
    <div id="HCMUTE" class="tabcontent">
        <h3>Su Pham Ky Thuat</h3>
        <img class = "featured-image"  src= "logo/supham.png" style="width:400px;height:500px;"  >
        <p>Ho Chi Minh City University of Technology and Education (Abbreviation: HCMUTE, Vietnamese: Trường Đại học Sư phạm Kỹ thuật Thành phố Hồ Chí Minh) is currently listed as one of the top 10 universities in Vietnam and also a member in the top group of Southeast Asia universities (basing on standard evaluation index).

        This is a public university located in Thủ Đức City, about 10 km north-east from downtown Ho Chi Minh City. This university offers bachelor's and associate degree to prospective lecturers in other technical institutions. The university also conducts technical research and vocational training, in addition to educational cooperation with foreign universities.</p>
    </div>

    <div id="FPT" class="tabcontent">
        <h3>FPT</h3>
        <img class = "featured-image" src= "logo/fpt.png" style="width:700px;height:500px;" >
        <p>Trường Đại học FPT là một cơ sở kinh doanh dịch vụ giáo dục tại được thành lập ngày 8/9/2006 theo Quyết định số 208/2006/QĐ-TTg của Thủ tướng Chính phủ,[1] do Tập đoàn FPT đầu tư 100% vốn, trở thành trường đại học đầu tiên do một doanh nghiệp thành lập tại Việt Nam</p>
    </div>

    <div id="RMIT" class="tabcontent">
        <h3>RMIT</h3>
        <img class = "featured-image" src= "logo/rmit.png" style="width:600px;height:500px;" >
        <p>RMIT University Vietnam (informally RMIT Vietnam or RMIT) is the Vietnamese branch of the Australian research university the Royal Melbourne Institute of Technology, known in Australia as RMIT University. It has three campuses located in Ho Chi Minh City, Hanoi and Danang.

            RMIT was the first completely foreign-owned university granted permission to operate in Vietnam. Since its establishment in 2000, it has won 15 Golden Dragon Awards from the Vietnamese Government for excellence in education.</p>
    </div>

    <div id="BTEC" class="tabcontent">
        <h3>BTEC</h3>
        <img class = "featured-image" src= "logo/BTEC.png" style="width:600px;height:500px;" >
        <p>Cao Đẳng quốc tế FPT liên lết cùng vương quốc Anh</p>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" type="text/javascript"></script> 
    <script type="text/javascript"> 
    function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
    </script>
    <?php



    
     ?>
</body>
</html>