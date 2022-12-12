
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Upload Assets</title>
</head>
    <script src="https://dynamique.hockeycurve.com/js/hc.min.js"> </script>
    <body>
<script>


       async function postName() 
   {
  const object = { "paths":["clienttest/mzindodi22/320x480/"] };
  const response = await fetch('https://dynamique.hockeycurve.com/keys?key=Kth7NS3ACWX2', {
    method: 'POST',
    body: JSON.stringify(object)
  });
  const test = await response.json();
  console.log(test); // logs 'OK'
  console.log(typeof(test));
  
      assetManager.showFolders([{path:'clienttest/mzindodi22/320x480/',key:test['data'][0]['key']}])
}
postName();
    // load component into any div, here loading into body
  let assetManager = HC.AssetManager(document.body)
    // var d320x480 = requests.post("https://dynamique.hockeycurve.com/keys?key=Kth7NS3ACWX2",data=json.dumps({"paths":["aprimeauto/mzindodi22/320x480"]})).text;

 
    // select the folders to be shown for uploading, here we are showing test folders, key should be acquired by using the fetch keys api
    assetManager.showFolders([{path:'clienttest/mzindodi22/320x480/',key:'3772d37b00ed7cae21470e35812f61b2'}])
</script>


   
</body>
</html>
