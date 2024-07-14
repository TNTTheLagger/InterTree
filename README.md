# InterTree

This project is an art project that tries to represent the internet.
Just plug in a website eg.: ``https://www.google.com/`` and wach it make a mesh of the internet.

## How to use

1. Download the project and run it with a php server (I tested it with xampp)
2. In the top seach bar type in a full url to a site (eg.: ``https://www.google.com/``) then press ``Search``
3. Once the initial web is made you can press ``Go Deeper`` to load more pages and go a layer deeper
   (WARNING: With each layer the number of websites loaded gets exponentially higher so you need a stopng PC)
4. Enjoj!

At any moment you cn click ``Render`` to render the current data that has been gathered and thi will not stop the current search.

## Detailed Explanation
### HTML Structure:

 - Controls: The section at the top where users can input URLs and initiate actions.
 - Graph: The main visualization area.

### JavaScript Functions:

 - updateStatus(message): Updates the status message displayed to the user.
 - getter(root): Fetches links from the provided URL and processes them into the data structure.
 - getAllLinks(url): Fetches and parses all links from the given URL.
 - removeDuplicates(arr): Utility function to remove duplicate entries from an array.
 - render(): Renders the graph visualization using the Orb library.
 - deeper(): Fetches additional layers of links to expand the graph.
 - search(): Initiates the search process for the entered URL.
 - load(): Loads initial data and renders the graph.
