<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Upload Assets</title>


</head>
<body>
    
   <script src="https://dynamique.hockeycurve.com/js/hc.min.js"> </script>

    <script>
    // load component into any div, here loading into body
    let assetManager = HC.AssetManager(document.body)
   
    // select the folders to be shown for uploading, here we are showing test folders, key should be acquired by using the fetch keys api
    assetManager.showFolders([{path:'test/campaign1/300x250/',key:'testkey'},{path:'test/campaign3/300x250/',key:'testkey'}])
</script>
</body>
</html>
