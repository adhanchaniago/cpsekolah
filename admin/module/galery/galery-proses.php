<?PHP session_start();
$config_='aW5jbHVkZSAoJy4uLy4uLy4uL2NvbmZpZy5waHAnKTsNCmluY2x1ZGUgKCcuLi8uLi9wcml2YXQvYWN0aXZhc2ktbG9naW4ucGhwJyk7ICAgDQppbmNsdWRlKCIuLi8uLi9pbi9yZXBsYWNlX2NoYXJhY3Rlci5waHAiKTs=';
eval(base64_decode($config_));?>


<!-- PERINTAH TAMBAH KATEGORY PAGE -->
<?PHP if (isset($_POST['addgalery'])) {
$add='JGVycm9yID0gYXJyYXkoKTsNCmlmIChlbXB0eSgkX1BPU1RbJ3RpdGxlJ10pKSB7DQogICAgICAgICRlcnJvcltdID0gJyc7Ly9hZGQgdG8gYXJyYXkgImVycm9yIg0KICAgIH0gZWxzZSB7DQokdGl0bGUgPSBhZGRzbGFzaGVzKHRyaW0oc3RyaXBfdGFncygkX1BPU1RbJ3RpdGxlJ10pKSk7DQogICAgfQ0KDQoNCmlmIChlbXB0eSgkX1BPU1RbJ2NhdGVnb3JpZXMnXSkpIHsvL2lmIG5vIG5hbWUgaGFzIGJlZW4gc3VwcGxpZWQgDQogICAgICAgICRlcnJvcltdID0gJyc7Ly9hZGQgdG8gYXJyYXkgImVycm9yIg0KICAgIH0gZWxzZSB7JGNhdGVnb3JpZXMgPSBzdHJpcF90YWdzKCRfUE9TVFsnY2F0ZWdvcmllcyddKTsgfQ0KDQoNCg0KJGNoYXJzPSIwMTIzNDU2Nzg5IjsgJHBhbmphbmc9JzIwJzsgJGxlbj1zdHJsZW4oJGNoYXJzKTsgDQokc3RhcnQ9JGxlbi0kcGFuamFuZzsgJHh4PXJhbmQoJzAnLCRzdGFydCk7IA0KJHl5PXN0cl9zaHVmZmxlKCRjaGFycyk7ICRJRD1zdWJzdHIoJHl5LCAkeHgsICRwYW5qYW5nKTsNCg0KJGdhbWJhcj0gJF9GSUxFU1siZ2FtYmFyIl1bIm5hbWUiXTsNCiRsb2thc2lfZmlsZSA9ICRfRklMRVNbJ2dhbWJhciddWyd0bXBfbmFtZSddOyAgDQokdWt1cmFuX2ZpbGUgPSAkX0ZJTEVTWydnYW1iYXInXVsnc2l6ZSddOw0KDQokZ2FtYmFyID0gc3RydG9sb3dlcihwcmVnX3JlcGxhY2UoIi9ccysvIiwgIiIuJElELiIiLCAkZ2FtYmFyKSk7DQokTUFYX0ZJTEVfU0laRSA9IDkwMDAwOyAvLzUwa2INCiR0eXBlR2FtYmFyID0gYXJyYXkoJ2ltYWdlL2JtcCcsICdpbWFnZS9naWYnLCAnaW1hZ2UvanBnJywgJ2ltYWdlL2pwZWcnLCAnaW1hZ2UvcG5nJyk7DQppZighaW5fYXJyYXkoJF9GSUxFU1snZ2FtYmFyJ11bJ3R5cGUnXSwkdHlwZUdhbWJhcikpeyAgDQpoZWFkZXIoImxvY2F0aW9uOiIuTVlfQURNSU4uImdhbGVyeS8/cmVmZj1pbWFnZXMwMCIpOy8vIEZHQU1CQVIgRVJST1INCn0NCi8vY2VrIGFwYWthaCB1a3VyYW4gZmlsZSBkaWF0YXMgNjBrYiANCmlmKCR1a3VyYW5fZmlsZSA+ICRNQVhfRklMRV9TSVpFKSB7DQpoZWFkZXIoImxvY2F0aW9uOiIuTVlfQURNSU4uImdhbGVyeS8/cmVmZj1pbWFnZXMwMSIpOy8vIEdBTUJBUiBFUlJPUg0KZXhpdCgpO30NCg0KJGRhdGV0aW1lID0gZGF0ZSgnZC1tLVknKTsNCmlmIChlbXB0eSgkZXJyb3IpKSB7IA0KbW92ZV91cGxvYWRlZF9maWxlKCRsb2thc2lfZmlsZSwgIi4uLy4uLy4uL2ltYWdlcy9nYWxlcnkvIi4kZ2FtYmFyKTsNCg0KJHNxbD1teXNxbF9xdWVyeSgiaW5zZXJ0IGludG8gZ2FsZXJ5IHZhbHVlcygnJywnJHRpdGxlJywgJyRjYXRlZ29yaWVzJywgJyRnYW1iYXInLCAnJGRhdGV0aW1lJykiKTsNCmlmKCEkc3FsKSAgeyANCmhlYWRlcigibG9jYXRpb246Ii5NWV9BRE1JTi4iZ2FsZXJ5Lz9yZWZmPTEiKTsvLyBlcm9yDQp9IGVsc2UgICB7DQpoZWFkZXIoImxvY2F0aW9uOiIuTVlfQURNSU4uImdhbGVyeS8/cmVmZj0yIik7Ly8gc3Vrc2VzDQogfQ0KDQp9DQplbHNleyANCmZvcmVhY2ggKCRlcnJvciBhcyAka2V5ID0+ICR2YWx1ZXMpIHsgICAgICAgICAgICANCmhlYWRlcigibG9jYXRpb246Ii5NWV9BRE1JTi4iZ2FsZXJ5Lz9yZWZmPTMiKTsvLyBlcm9yIGFsbA0KDQp9fQ==';
eval(base64_decode($add));
}
$up='JGFjdD1teXNxbF9yZWFsX2VzY2FwZV9zdHJpbmcoJF9HRVRbJ2FjdCddKTtpZiAoJGFjdD09J3VwZGF0ZScpew0KJHJlZmlkPWh0bWxlbnRpdGllcygkX0dFVFsncmVmaWQnXSk7IA0KJGVycm9yID0gYXJyYXkoKTsNCmlmIChlbXB0eSgkX1BPU1RbJ3RpdGxlJ10pKSB7DQogICAgICAgICRlcnJvcltdID0gJyc7Ly9hZGQgdG8gYXJyYXkgImVycm9yIg0KICAgIH0gZWxzZSB7DQokdGl0bGUgPSBhZGRzbGFzaGVzKHRyaW0oc3RyaXBfdGFncygkX1BPU1RbJ3RpdGxlJ10pKSk7DQogICAgfQ0KDQoNCmlmIChlbXB0eSgkX1BPU1RbJ2NhdGVnb3JpZXMnXSkpIHsNCiAgICAgICAgJGVycm9yW10gPSAnJzsvL2FkZCB0byBhcnJheSAiZXJyb3IiDQogICAgfSBlbHNlIHskY2F0ZWdvcmllcyA9IHN0cmlwX3RhZ3MoJF9QT1NUWydjYXRlZ29yaWVzJ10pOyB9DQoNCiRjaGFycz0iMDEyMzQ1Njc4OSI7ICRwYW5qYW5nPScyMCc7ICRsZW49c3RybGVuKCRjaGFycyk7IA0KJHN0YXJ0PSRsZW4tJHBhbmphbmc7ICR4eD1yYW5kKCcwJywkc3RhcnQpOyANCiR5eT1zdHJfc2h1ZmZsZSgkY2hhcnMpOyAkSUQ9c3Vic3RyKCR5eSwgJHh4LCAkcGFuamFuZyk7DQoNCiRnYW1iYXI9ICRfRklMRVNbImdhbWJhciJdWyJuYW1lIl07DQokbG9rYXNpX2ZpbGUgPSAkX0ZJTEVTWydnYW1iYXInXVsndG1wX25hbWUnXTsgIA0KJHVrdXJhbl9maWxlID0gJF9GSUxFU1snZ2FtYmFyJ11bJ3NpemUnXTsNCg0KJGdhbWJhciA9IHN0cnRvbG93ZXIocHJlZ19yZXBsYWNlKCIvXHMrLyIsICIiLiRJRC4iIiwgJGdhbWJhcikpOw0KJE1BWF9GSUxFX1NJWkUgPSA5MDAwMDsgLy81MGtiDQokdHlwZUdhbWJhciA9IGFycmF5KCdpbWFnZS9ibXAnLCAnaW1hZ2UvZ2lmJywgJ2ltYWdlL2pwZycsICdpbWFnZS9qcGVnJywgJ2ltYWdlL3BuZycpOw0KaWYoIWluX2FycmF5KCRfRklMRVNbJ2dhbWJhciddWyd0eXBlJ10sJHR5cGVHYW1iYXIpKXsgIA0KaGVhZGVyKCJsb2NhdGlvbjoiLk1ZX0FETUlOLiJnYWxlcnkvP3JlZmY9aW1hZ2VzMDAiKTsvLyBGR0FNQkFSIEVSUk9SDQp9DQovL2NlayBhcGFrYWggdWt1cmFuIGZpbGUgZGlhdGFzIDYwa2IgDQppZigkdWt1cmFuX2ZpbGUgPiAkTUFYX0ZJTEVfU0laRSkgew0KaGVhZGVyKCJsb2NhdGlvbjoiLk1ZX0FETUlOLiJnYWxlcnkvP3JlZmY9aW1hZ2VzMDEiKTsvLyBHQU1CQVIgRVJST1INCmV4aXQoKTt9DQoNCiRkYXRldGltZSA9IGRhdGUoJ2QtbS1ZJyk7DQoJDQppZigkZ2FtYmFyID09ICIiKXsNCmlmIChlbXB0eSgkZXJyb3IpKSB7IA0KJGVkaXQ9bXlzcWxfcXVlcnkoIlVQREFURSBnYWxlcnkgU0VUIHRpdGxlPSckdGl0bGUnLGNhdGVnb3JpZXM9JyRjYXRlZ29yaWVzJyxkYXRldGltZT0nJGRhdGV0aW1lJyBXSEVSRSBpZF9nYWxlcnk9JyRyZWZpZCciKTsNCmlmKCEkZWRpdCkgeyANCmhlYWRlcigibG9jYXRpb246Ii5NWV9BRE1JTi4iZ2FsZXJ5Lz9yZWZpZD0iLiRyZWZpZC4iJnJlZmY9NCIpOy8vIEVycm9yDQp9IGVsc2UgICB7DQpoZWFkZXIoImxvY2F0aW9uOiIuTVlfQURNSU4uImdhbGVyeS8/cmVmZj01Iik7Ly8gU3Vrc2VzDQp9IH0gDQoNCmVsc2V7IA0KZm9yZWFjaCAoJGVycm9yIGFzICRrZXkgPT4gJHZhbHVlcykgeyAgICAgICAgICAgIA0KaGVhZGVyKCJsb2NhdGlvbjoiLk1ZX0FETUlOLiJnYWxlcnkvP3JlZmlkPSIuJHJlZmlkLiImcmVmZj0zIik7Ly8gRXJyb3IgYWxsDQoNCn19DQp9DQoNCmVsc2V7DQokY2FyaT0gbXlzcWxfcXVlcnkoInNlbGVjdCAqIGZyb20gZ2FsZXJ5IHdoZXJlIGlkX2dhbGVyeT0nJHJlZmlkJyIpOw0KJGRhdGE9bXlzcWxfZmV0Y2hfYXJyYXkoJGNhcmkpOw0KJGdhbWJhcl9oYXB1cyA9ICRkYXRhWydnYW1iYXInXTsNCiR0bXBmaWxlID0gIiIuJGxva2FzaV9maWxlLiIuLi8uLi8uLi9pbWFnZXMvZ2FsZXJ5LyIuJGdhbWJhcl9oYXB1czsNCnVubGluayAoJHRtcGZpbGUpOw0KDQptb3ZlX3VwbG9hZGVkX2ZpbGUoJGxva2FzaV9maWxlLCAiLi4vLi4vLi4vaW1hZ2VzL2dhbGVyeS8iLiRnYW1iYXIpOw0KJGVkaXQyPW15c3FsX3F1ZXJ5KCJVUERBVEUgZ2FsZXJ5IFNFVCB0aXRsZT0nJHRpdGxlJyxjYXRlZ29yaWVzPSckY2F0ZWdvcmllcycsZ2FtYmFyPSckZ2FtYmFyJyxkYXRldGltZT0nJGRhdGV0aW1lJyBXSEVSRSBpZF9nYWxlcnk9JyRyZWZpZCciKTsNCmlmKCEkZWRpdDIpIHsgDQpoZWFkZXIoImxvY2F0aW9uOiIuTVlfQURNSU4uImdhbGVyeS8iLiRyZWZpZC4iJnJlZmY9NCIpOy8vIEVycm9yDQp9IGVsc2UgICB7DQpoZWFkZXIoImxvY2F0aW9uOiIuTVlfQURNSU4uImdhbGVyeS8/cmVmZj01Iik7Ly8gU3Vrc2VzDQp9IH0gDQp9';
eval (base64_decode($up));

$refid = htmlentities($_GET['refid']); $act= mysql_real_escape_string($_GET['act']);
if ($act=='delete'){
$delete='JHJlZmlkID0gaHRtbGVudGl0aWVzKCRfR0VUWydyZWZpZCddKTsNCiRjYXJpPW15c3FsX3F1ZXJ5KCJzZWxlY3QgKiBmcm9tIGdhbGVyeSB3aGVyZSBpZF9nYWxlcnk9JyRyZWZpZCciKTsNCiRkdD1teXNxbF9mZXRjaF9hcnJheSgkY2FyaSk7DQokZ2FtYmFyPSBzdHJpcF90YWdzKCRkdFsnZ2FtYmFyJ10pOw0KJHRtcGZpbGUgPSAiLi4vLi4vLi4vaW1hZ2VzL2dhbGVyeS8iLiRnYW1iYXI7DQokc3FsPW15c3FsX3F1ZXJ5KCJkZWxldGUgZnJvbSBnYWxlcnkgd2hlcmUgaWRfZ2FsZXJ5PSckcmVmaWQnIik7DQoJaWYoISRzcWwpew0KaGVhZGVyKCJsb2NhdGlvbjoiLk1ZX0FETUlOLiJnYWxlcnkvP3JlZmY9NiIpOy8vIGVycm9yIGRlbGV0DQoJfWVsc2V7DQoJCQl1bmxpbmsgKCR0bXBmaWxlKTsNCmhlYWRlcigibG9jYXRpb246Ii5NWV9BRE1JTi4iZ2FsZXJ5Lz9yZWZmPTciKTsvLyBzdWtzZXMNCgl9';
eval (base64_decode($delete));
}

//=================================================================================================
 $add_c ='aWYgKGlzc2V0KCRfUE9TVFsnYWRkX2NhdGVnb3JpZXMnXSkpIHsvLyBVTlRVSyBNRU5BTUJBSCBLQVRFR0dPUkkNCiR0aXRsZSA9IHN0cmlwX3RhZ3MoJF9QT1NUWyd0aXRsZSddKTsNCiRsaW5rX2NhdGVnb3JpZXMgPSBzdHJ0b2xvd2VyKCR0aXRsZSk7DQokbGlua19jYXRlZ29yaWVzPSBzdHJfcmVwbGFjZSgnICcsICctJywgJGxpbmtfY2F0ZWdvcmllcyk7DQppZiAoIWVtcHR5KCR0aXRsZSkpew0KJHNxbCA9bXlzcWxfcXVlcnkoImluc2VydCBpbnRvIGdhbGVyeV9jYXRlZ29yaWVzIHZhbHVlcygnJywgJyR0aXRsZScsICckbGlua19jYXRlZ29yaWVzJykiKTsNCmlmKCEkc3FsKXsgDQpoZWFkZXIoImxvY2F0aW9uOiIuTVlfQURNSU4uImdhbGVyeS9jYXRlZ29yaWVzLz9yZWZmPTEiKTsvL2Vycm9yDQp9DQplbHNleyBoZWFkZXIoImxvY2F0aW9uOiIuTVlfQURNSU4uImdhbGVyeS9jYXRlZ29yaWVzLz9yZWZmPTIiKTsvL3N1a3Nlcw0KfX1lbHNlew0KaGVhZGVyKCJsb2NhdGlvbjoiLk1ZX0FETUlOLiJnYWxlcnkvY2F0ZWdvcmllcy8/cmVmZj0zIik7Ly9rb3NvbmcNCn0gfQ==';
eval(base64_decode($add_c));

//================================
$update_c='aWYgKGlzc2V0KCRfUE9TVFsnZWRpdGthdGVnb3JpJ10pKSB7Ly8gVU5UVUsgRURJVCBLQVRFR0dPUkkNCiRpZD1teXNxbF9yZWFsX2VzY2FwZV9zdHJpbmcoJF9HRVRbJ2lkJ10pOyANCiR0aXRsZSA9IHN0cmlwX3RhZ3ModHJpbSgkX1BPU1RbJ3RpdGxlJ10pKTsNCiRsaW5rX2NhdGVnb3JpZXMgPSBzdHJ0b2xvd2VyKCR0aXRsZSk7DQokbGlua19jYXRlZ29yaWVzID0gc3RyX3JlcGxhY2UoJyAnLCAnLScsICRsaW5rX2NhdGVnb3JpZXMpOw0KaWYgKCFlbXB0eSgkdGl0bGUpKXsNCiRzaW1wYW49bXlzcWxfcXVlcnkoIlVQREFURSBnYWxlcnlfY2F0ZWdvcmllcyBTRVQgdGl0bGU9JyR0aXRsZScgLGxpbmtfY2F0ZWdvcmllcz0nJGxpbmtfY2F0ZWdvcmllcycgV0hFUkUgaWQ9JyRpZCciKTsNCmlmKCEkc2ltcGFuKXsgDQpoZWFkZXIoImxvY2F0aW9uOiIuTVlfQURNSU4uImdhbGVyeS9jYXRlZ29yaWVzLz9yZWZmPTQiKTsvL2Vycm9yDQp9ZWxzZXsNCmhlYWRlcigibG9jYXRpb246Ii5NWV9BRE1JTi4iZ2FsZXJ5L2NhdGVnb3JpZXMvP3JlZmY9NSIpOy8vc3Vrc2VzDQp9fWVsc2V7DQpoZWFkZXIoImxvY2F0aW9uOiIuTVlfQURNSU4uImFnYWxlcnkvY2F0ZWdvcmllcy8/cmVmZj0zIik7Ly9rb3NvbmcNCn19';
eval(base64_decode($update_c));
//=================================

$delete_c='JGFjdGlvbj1teXNxbF9yZWFsX2VzY2FwZV9zdHJpbmcoJF9HRVRbJ2FjdGlvbiddKTsNCiRyZWZpZGM9ICRfUkVRVUVTVFsncmVmaWRjJ107IGlmICgkYWN0aW9uPT0nZGVsZXRlX2MnKXsNCmlmIChlbXB0eSgkcmVmaWRjKSl7DQpoZWFkZXIoImxvY2F0aW9uOiIuTVlfQURNSU4uImFydGljbGUvY2F0ZWdvcmllcz9yZWZmPTYiKTsvL0lEIG5vdCBmb3VuZA0KZXhpdCgpO30NCiRzcWxkZWxrYXQgPSBteXNxbF9xdWVyeSgiZGVsZXRlIGZyb20gZ2FsZXJ5X2NhdGVnb3JpZXMgd2hlcmUgaWQ9JyRyZWZpZGMnIik7DQppZighJHNxbCl7IA0KaGVhZGVyKCJsb2NhdGlvbjoiLk1ZX0FETUlOLiJhZ2FsZXJ5L2NhdGVnb3JpZXMvP3JlZmY9NyIpOyAvLyBlcnJvcg0KfQ0KaGVhZGVyKCJsb2NhdGlvbjoiLk1ZX0FETUlOLiJnYWxlcnkvY2F0ZWdvcmllcy8/cmVmZj04Iik7IC8vc3Vrc2VzDQp9';
eval(base64_decode($delete_c));?>

<!doctype html><html lang="en"><head><title>Proses</title><meta name="viewport" content="initial-scale=1.0,maximum-scale=1.0,user-scalable=no"></head><body>
<h2>Sorry script is not running..</h2>
<h3 style="text-align:left;font-family:Arial, Helvetica, sans-serif;font-size:25px; cursor:pointer" onClick="window.history.back()">Go Back</h3></body></html>