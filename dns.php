<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>⚡ NAVID Cyber Panel</title>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&display=swap" rel="stylesheet">
  <style>
    body, html {
      margin: 0;
      padding: 0 0 60px;
      height: 100%;
      font-family: 'Orbitron', sans-serif;
      color: #fff;
      overflow-x: hidden;
      background-color: #000;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    #vanta-bg {
      width: 100%;
      height: 100%;
      position: fixed;
      z-index: -1;
    }

    .container {
      max-width: 400px;
      margin: 80px auto 20px;
      background: rgba(0, 0, 0, 0.6);
      backdrop-filter: blur(20px);
      border: 2px solid rgba(0,255,255,0.3);
      border-radius: 20px;
      padding: 30px;
      box-shadow: 0 0 30px rgba(0,255,255,0.2);
      animation: fadeIn 1.2s ease;
    }

    @keyframes fadeIn {
      from {opacity:0; transform: translateY(30px);}
      to {opacity:1; transform: translateY(0);}
    }

    .logo {
      text-align: center;
      margin-bottom: 20px;
    }

    .logo img {
      width: 80px;
      border-radius: 50%;
      box-shadow: 0 0 20px cyan;
    }

    h1 {
      text-align: center;
      font-size: 1.5em;
      background: linear-gradient(90deg, #00ffff, #ff00ff);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      margin: 0 0 20px 0;
    }

    label {
      display: block;
      margin: 15px 0 5px;
      font-size: 0.9em;
      color: #ccc;
    }

    input, select {
      width: 100%;
      padding: 10px;
      border-radius: 8px;
      border: none;
      background: rgba(255,255,255,0.1);
      color: #fff;
      font-size: 1em;
      outline: none;
    }

    button {
      width: 100%;
      margin-top: 15px;
      padding: 12px;
      font-size: 1em;
      font-weight: bold;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      background: linear-gradient(90deg, #00ffff, #ff00ff);
      color: #000;
      position: relative;
      overflow: hidden;
      transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    button::after {
      content: "";
      position: absolute;
      top:0; left:-100%;
      width:200%;
      height:100%;
      background: rgba(255,255,255,0.2);
      transform: skewX(-45deg);
      transition: left 0.5s;
    }

    button:hover::after {
      left:100%;
    }

    button:hover {
      transform: scale(1.05);
      box-shadow: 0 0 20px #00ffff;
    }

    .progress-bar {
      width: 0%;
      height: 5px;
      background: linear-gradient(90deg, #00ffff, #ff00ff);
      border-radius: 5px;
      margin: 10px 0;
      transition: width 0.6s ease;
    }

    pre {
      background: rgba(0,0,0,0.4);
      padding: 15px;
      border-radius: 10px;
      font-size: 0.85em;
      overflow-x: auto;
    }

    .footer {
      max-width: 400px;
      margin: 30px auto 30px;
      text-align: center;
      font-size: 0.9em;
      color: #ccc;
    }

    .footer a {
      color: #00ffff;
      text-decoration: none;
      margin: 0 8px;
      transition: color 0.3s;
    }

    .footer a:hover {
      color: #ff00ff;
    }

    /* Lock screen styles */
    #lockScreen {
      position: fixed;
      top: 0; left: 0;
      width: 100vw;
      height: 100vh;
      background: black;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      z-index: 9999;
      font-family: 'Orbitron', sans-serif;
      color: white;
    }

    #lockScreen input {
      padding: 12px;
      border-radius: 8px;
      border: none;
      width: 250px;
      font-size: 1em;
      text-align: center;
      background: rgba(255,255,255,0.1);
      color: white;
      margin-bottom: 10px;
    }

    #lockScreen button {
      padding: 10px 20px;
      font-size: 1em;
      border-radius: 8px;
      border: none;
      cursor: pointer;
      background: linear-gradient(90deg, #00ffff, #ff00ff);
      color: black;
      font-weight: bold;
    }
  </style>
</head>
<body>

<div id="vanta-bg"></div>

<!-- Lock Screen -->
<div id="lockScreen">
  <h2>🔐 Enter Password to Access</h2>
  <input type="password" id="passwordInput" placeholder="Enter Password">
  <button onclick="checkPassword()">Enter</button>
</div>

<div class="container">
  <div class="logo">
    <img src="https://i.postimg.cc/QtvBvfy8/file-00000000c0586243adfcf137b2f88ea5-1.png" style="width:150px; filter: invert(1);" alt="Logo">
  </div>
  <h1>NAVID CYBER PANEL</h1>

  <label>📁 File Name:</label>
  <input id="username" placeholder="Name ">

  <label>🌐 Select Server:</label>
  <select id="region">
    <option value="fr">France 🇫🇷</option>
    <option value="de">Germany 🇩🇪</option>
    <option value="ae">UAE 🇦🇪</option>
    <option value="tr">Turkey 🇹🇷</option>
    <option value="iq">Iraq 🇮🇶</option>
  </select>

  <button onclick="buildAndDownload()">⚡ Build Config</button>
  <div class="progress-bar" id="progressBar"></div>
  <button onclick="copyConfig()">📋 Copy Config</button>

  <pre id="configOutput"></pre>
</div>

<div class="footer">
  <p>Channels Solrpubg:</p>
  <p>
    <a href="https://www.instagram.com/solrpubg" target="_blank">Instagram page</a> |
    <a href="https://t.me/solrpubg" target="_blank">Telegram Channel</a> |
    <a href="https://youtube.com/@solrpubgg?si=-c_MtYRJSOSiWJ3b" target="_blank">YouTube Channel</a>
  </p>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanta/dist/vanta.net.min.js"></script>
<script>
VANTA.NET({
  el: "#vanta-bg",
  mouseControls: true,
  touchControls: true,
  minHeight: 200.00,
  minWidth: 200.00,
  scale: 1.00,
  scaleMobile: 1.00,
  color: 0x00ffff,
  backgroundColor: 0x000000
});

const dnsServers = "10.202.10.10, 78.157.42.101";
const mtu = 1420;

function generateKey() {
  const predefinedKeys = [
    "7gWTVvV8gThsU3zAcO7+ZAfCJkeO1jZT2Z7Gi0T7u3U=",
    "tMuQ6x2gK0Ov6nXjVoFEOI0S4U6G1XzUv6IoKPQrYlM="
  ];
  const index = Math.floor(Math.random() * predefinedKeys.length);
  return predefinedKeys[index];
}

function generateIPv4(region) {
  const prefixes = {
    fr: "51.158",
    ae: "45.89",
    iq: "185.66",
    de: "138.201",
    tr: "45.32",
  };
  const prefix = prefixes[region] || "94.100";
  return `${prefix}.${Math.floor(Math.random() * 255)}.${Math.floor(Math.random() * 255)}`;
}

function generateIPv6(region) {
  const prefixes = {
    fr: ["2a01:4f8:1:abcd"],
    ae: ["2a0c:4b00:1234:5678"],
    iq: ["2a0a:4a80:abcd:ef12"],
    de: ["2a01:4f8:1:4321", "2a03:4000:1f:abcd"],
    tr: ["2a0c:4b00:aaaa:bbbb"]
  };

  const regionPrefixes = prefixes[region] || ["2a0c:4b00:cccc:dddd"];
  const prefix = regionPrefixes[Math.floor(Math.random() * regionPrefixes.length)];

  const r = () => Math.floor(Math.random() * 0x10000).toString(16).padStart(4, '0');

  return `${prefix}:${r()}:${r()}:${r()}:${r()}`;
}

function generateConfig(region) {
  const privateKey = generateKey();
  const publicKey = generateKey();
  const ipv4 = generateIPv4(region);
  const ipv6 = generateIPv6(region);
  return `[Interface]
PrivateKey = ${privateKey}
Address = ${ipv4}/32, ${ipv6}/128
DNS = ${dnsServers}
MTU = ${mtu}

[Peer]
PublicKey = ${publicKey}
Endpoint = ${ipv4}:51820
PersistentKeepalive = 25`;
}

function buildAndDownload() {
  const username = document.getElementById("username").value.trim();
  const region = document.getElementById("region").value;
  if (!username) return alert("Please enter a file name");
  document.getElementById("progressBar").style.width = "0%";
  setTimeout(() => {
    document.getElementById("progressBar").style.width = "100%";
    const config = generateConfig(region);
    const blob = new Blob([config], { type: "conf/plain;charset=utf-8" });
    const a = document.createElement("a");
    a.href = URL.createObjectURL(blob);
    a.download = `${username}.conf`;
    a.click();
    document.getElementById("configOutput").textContent = config;
  }, 600);
}

function copyConfig() {
  const configText = document.getElementById("configOutput").textContent;
  if (!configText) return;
  navigator.clipboard.writeText(configText).then(() => {
    alert("✅ Config copied!");
  });
}

// 🔐 Lock screen logic
function checkPassword() {
  const input = document.getElementById("passwordInput").value.trim();
  if (input === "amooali") {
    document.getElementById("lockScreen").style.display = "none";
    document.querySelector(".container").style.display = "block";
    document.querySelector(".footer").style.display = "block";
  } else {
    alert("❌ Wrong password. Try again.");
  }
}

document.addEventListener("DOMContentLoaded", () => {
  document.querySelector(".container").style.display = "none";
  document.querySelector(".footer").style.display = "none";
});
</script>
</body>
</html>