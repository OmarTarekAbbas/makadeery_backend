var http=require("http"),url=require("url"),path=require("path"),fs=require("fs");http.createServer(function(e,t){var r=url.parse(e.url).pathname,i=path.join(process.cwd(),r);fs.readFile(i,"binary",function(e,r){if(e)return t.writeHead(500,{"Content-Type":"text/plain"}),t.write(e+"\n"),void t.end();t.writeHead(200,i.match(/\.js$/)?{"Content-Type":"text/javascript"}:{}),t.write(r,"utf-8"),t.end()})}).listen(8124,"0.0.0.0"),console.log("Test suite at http://0.0.0.0:8124/test/index.html");