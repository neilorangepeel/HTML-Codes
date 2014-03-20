var htmlList = new List('htmlcodes', { 
  valueNames: [ 'character', 'description', 'entity', 'decimal', 'hex' ], 
  plugins: [ ListFuzzySearch() ] 
});
htmlList.show(0, 100000);