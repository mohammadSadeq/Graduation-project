package twitter;
import main.main;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.beans.factory.annotation.Qualifier;
import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.EnableAutoConfiguration;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.springframework.http.MediaType;
import org.springframework.social.twitter.api.Twitter;
import org.springframework.social.twitter.api.Tweet;

import org.springframework.web.bind.annotation.PathVariable;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

import java.util.ArrayList;
import java.util.List;
@SpringBootApplication
@EnableAutoConfiguration
@RestController
@RequestMapping(twitterController.TWITTER_BASE_URI)
public class twitterController {
    public static void main(String []arg){
        SpringApplication.run(twitterController.class,arg);
    }

    public static final String TWITTER_BASE_URI="svc/v1/tweets";

    @Autowired
    private Twitter twitter;
    @RequestMapping(value="{hashTag}",produces = MediaType.APPLICATION_JSON_UTF8_VALUE)
    public List<String> getTweets(@PathVariable final String hashTag ){
             System.out.print(hashTag);
            List<String> l=new ArrayList<String>();

           List <Tweet> tweet= twitter.searchOperations().search(hashTag,200).getTweets();
           System.out.print(tweet.size());
           int i=0;
            for(;i<tweet.size();i++)
                if(!tweet.get(i).getEntities().getMedia().isEmpty())
                    l.add(tweet.get(i).getEntities().getMedia().get(0).getMediaUrl());
                else  l.add(tweet.get(i).getText());

        return l;
    }
}