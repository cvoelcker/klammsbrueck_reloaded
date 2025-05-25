grep -rlZ http:\/\/dsaklammsbrueck.forumprofi.de\/ . | xargs -0 sed -i 's/http:\/\/dsaklammsbrueck.forumprofi.de\//.\//g'

