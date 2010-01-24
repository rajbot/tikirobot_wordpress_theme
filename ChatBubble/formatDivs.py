#!/usr/bin/python

"""
Copyright(c)2006 TikiRobot. Software license GPL version 2.

This script helps format chat transcript as ChatBubble divs, so that they
appear as iChat-style speech balloons.

example usage: ./formatDivs.py "raj: hi guys" "may: hi!" "peliom: hi!!"
"""

## Site-specific variables
## Edit these before using!
##_____________________________________________________________________________
userColors = {
                'rajbot': 'Blue',
                'peliom': 'Pink',
                'bob'   : 'LtGrey',
             }

CBurl = 'http://www.tikirobot.net/wp/wp-content/themes/gentle_calm/ChatBubble/'

import sys
import os

## helper functions
##_____________________________________________________________________________
def swapSide(prevHandSide):
    if ('L'  == prevHandSide):
        return 'R'
    elif ('R' == prevHandSide):
        return 'L'
    else:
        sys.exit('prevHandSide must be either L or R!')

## __main__:
##_____________________________________________________________________________        

numDivs = len(sys.argv) - 1
handSides = {}
prevHandSide = 'L'

if (numDivs < 1):
    sys.exit('example usage: ./formatDivs.py "raj: hi guys" "may: hi!" "peliom: hi!!"')

print

for i in range(1, numDivs+1):

    try:
        (user, msg) = sys.argv[i].split(": ", 1)
    except ValueError:
        print 'messages must be in format "user: message"'
        raise

    #get handSide of current bubble
    if (user not in handSides):
        side = swapSide(prevHandSide)
        handSides[user] = side
    else:
        side = handSides[user]

    #error checking
    iconJpg = 'icons/'+user+'.jpg'
    if (not os.path.exists(iconJpg)):
        sys.exit('User icon ' + user +'.jpg does not exist in icons directory!')

    if (user not in userColors):
        sys.exit('user color preference for ' + user + ' not found! Please add it to userColors dict!')

    color     = userColors[user]
    bubblePng = 'Bubble' + color + side + '800x1600.png'
    
    if (not os.path.exists(bubblePng)):
        sys.exit('ChatBubble graphic ' + bubblePng + ' not found!')
    
    print '<div class="CBmsg CBmsg%s CB%s%s">' % (side, color.lower(), side)
    if ('L' == side):
        print '  <div class="CBicon%s"><img src="%s"></div>' % (side, CBurl + iconJpg)
    print '  <div class="CBtxt">'
    print '    <div class="CBcontent">'
    print '      <div class="CBt"></div>'
    print '      ' + msg
    print '    </div>'
    print '    <div class="CBb"><div></div></div>'
    print '  </div>'
    if ('R' == side):
        print '  <div class="CBicon%s"><img src="%s"></div>' % (side, CBurl + iconJpg)
    print '</div>'
    print '<br clear=all>\n'

    prevHandSide = side
    