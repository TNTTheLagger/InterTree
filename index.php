<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Orb</title>
  <script src="https://unpkg.com/@memgraph/orb@0.0.2/dist/browser/orb.js"></script>
  <style>
    html, body {
      height: 100%;
      margin: 0;
    }
    #graph {
      height: 100%;
    }
  </style>
</head>
<body>
	<div id="graph"></div>
	<script>
		const container = document.getElementById("graph");
 
        const nodes = [
            { id: 1, name: "House of the Dragon", type: "Show" },
            { id: 2, name: "Rhaenyra Targaryen", type: "Person", family: "Targaryen" },
            { id: 3, name: "Daemon Targaryen", type: "Person", family: "Targaryen" },
            { id: 4, name: "Viserys Targaryen", type: "Person", family: "Targaryen" },
            { id: 5, name: "Otto Hightower", type: "Person", family: "Hightower" },
            { id: 6, name: "Alicent Hightower", type: "Person", family: "Hightower" },
        ];
        const edges = [
            { id: 1, start: 2, end: 1 },
            { id: 2, start: 3, end: 1 },
            { id: 3, start: 4, end: 1 },
            { id: 4, start: 5, end: 1 },
            { id: 5, start: 6, end: 1 },
            { id: 6, start: 3, end: 4, label: "brother of" },
            { id: 7, start: 4, end: 3, label: "brother of" },
            { id: 8, start: 2, end: 4, label: "child of" },
            { id: 9, start: 6, end: 5, label: "child of" },
        ];
        
        const orb = new Orb.Orb(container);
        
        // Initialize nodes and edges
        orb.data.setup({ nodes, edges });
        
        // Render and recenter the view
        orb.view.render(() => {
        orb.view.recenter();
        });
	</script>
</body>
</html>
