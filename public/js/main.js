// prevent navigation
    document.addEventListener("DOMContentLoaded", function() {
      var links = document.getElementsByTagName("A");
      for(var i=0; i < links.length; i++) {
        links[i].addEventListener("click", function(e) {
          var href = this.getAttribute("href")

          if (!href) {
            return
          }

          if (href === '#') {
            // hash only ('#')
            console.debug('Internal nav allowed by Codeply');
            e.preventDefault()
          }
          else if (this.hash) {
            // hash with tag ('#foo')
            var element = null
            try {
              element = document.querySelector(this.hash)
            }
            catch(e) {
              console.debug('Codeply internal nav querySelector failed')
            }
            if (element) {
              // scroll to anchor
              e.preventDefault();
              const top = element.getBoundingClientRect().top + window.pageYOffset
              //window.scrollTo({top, behavior: 'smooth'})
              window.scrollTo(0,top)
              console.debug('Internal anchor controlled by Codeply to element:' + this.hash)
            }
            else {
              // allow javascript routing
              console.debug('Internal nav route allowed by Codeply');
            }
          }
          else if (href.indexOf("/p/")===0 || href.indexOf("/v/")===0) {
            // special multi-page routing
            console.debug('Special internal page route: ' + href)

            var l = href.replace('/p/','/v/')

            // reroute
            e.preventDefault()
            var newLoc = l + '?from=internal'
            console.debug('Internal view will reroute to ' + newLoc) 
            location.href = newLoc
          }
          else if (href.indexOf("./")===0) {
            // special multi-page routing
            console.debug('Special internal ./ route: ' + href)

            var u = parent.document.URL.split("/")
            var pn = href.split("/")[1]
            var plyId = u[u.length-1]

            if (plyId.indexOf('?from')>-1) {
              // already rerouted this
              console.debug('already rerouted')
              plyId = u[u.length-2]
            }

            var l = plyId + '/' + pn
            
            console.debug(u)
            console.debug(pn)
            console.debug('l',l)

            // reroute
            e.preventDefault()
            var newLoc = '/v/' + l + '?from=internal'
            console.debug('Internal page will reroute to ' + newLoc) 
            location.href = newLoc
          }
          else {
            // no external links
            e.preventDefault();
            console.debug('External nav prevented by Codeply');
          }
          //return false;
        })
      }
    }, null);
