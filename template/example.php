<?php
/*
 출력값 
PHP
PHP: Hypertext Preprocessor
website is php.net
*/
abstract class AbstractPageTemplate {
    protected final function template(){
        $result .= $this->header();
        $result .= $this->article();
        $result .= $this->footer();
        return $result;
    }
    protected abstract function header();
    protected abstract function article();
    protected abstract function footer();

    public function render(){
        return $this->template();
    }
}

class TextPage extends AbstractPageTemplate{
    protected function header(){
        return "PHP\n";
    }
    protected function article(){
        return "PHP: Hypertext Preprocessor\n";
    }
    protected function footer(){
        return "website is php.net\n";
    }
}

class HtmlPage extends AbstractPageTemplate{
    protected function header(){
        return "<header>PHP</header>\n";
    }
    protected function article(){
        return "<article>PHP: Hypertext Preprocessor</article>\n";
    }
    protected function footer(){
        return "<footer>website is php.net</footer>\n";
    }
    public function render(){
        $result = '<html>';
        $result .= $this->template();
        return $result.'</html>';
    }
}
echo '<h1>text</h1>';
$text = new TextPage();
echo $text->render();
echo '<h1>html</h1>';
$html = new HtmlPage();
echo $html->render();
/*
템플릿 디자인 패턴
구현하고자 하는 단어는 동일, 그것을 Text 방식으로, HTML 방식으로 또는 다른 방식으로 구현하고자 할 때
1. 제일 처음 TextPage, HtmlPage 클래스의 출력을 rendor 메소드를 통해서 정리한다.
2. 두개의 rendor 메소드는 <html> 태그를 붙이는것 이외에는 동일하다.
3. 그래서 제일 상단의 AbstractPageTemplate 클래스를 만든 후 TextPage, HtmlPage 클래스에서 AbstractPageTemplate 클래스를 상속 받는다.
4. 상속 받은 후 render 클래스를 AbstractPageTemplate 클래스로 옮기고 그 중 겹치는 부분은 다시 template로 빼낸다.
5. 그리고 상속 받는 자식 클래스들에 필수적으로 Header, article, footer 메소드가 필요하기 때문에 AbstractPageTemplate 클래스에서 해당 메소드를 abstract를 붙여 메소드 생성을 강제화 한다.
6. 그리고 template는 변경되지 않아야하고 AbstractPageTemplate 클래스 에서만 동작하므로 final을 붙여 상속 받지 못하게 한다.

Tip! 조그만한 내용이라도 겹치는 부분이 있을 경우 메소드화 하는 개발 습관은 나중에 큰 프로젝트를 개발 할 때 많은 도움을 준다.
     그렇기 때문에 최대한 코드를 짤 때 객체지향 적으로 생각 하도록 노력한다.
*/

?>