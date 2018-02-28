<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_d240d1cc73e64fb3a683165ac0f75fa5b6e8d221e58834581c64283ac59ad2cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c02d9f893f1577c1dc66c345840aa79ecb5ef721138f450be9062baf44cf60f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c02d9f893f1577c1dc66c345840aa79ecb5ef721138f450be9062baf44cf60f->enter($__internal_2c02d9f893f1577c1dc66c345840aa79ecb5ef721138f450be9062baf44cf60f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_8841b8a211b44ca941c96d9d580a67e3d8c9a298bb0610a54cbbbf392cdb21b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8841b8a211b44ca941c96d9d580a67e3d8c9a298bb0610a54cbbbf392cdb21b6->enter($__internal_8841b8a211b44ca941c96d9d580a67e3d8c9a298bb0610a54cbbbf392cdb21b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_2c02d9f893f1577c1dc66c345840aa79ecb5ef721138f450be9062baf44cf60f->leave($__internal_2c02d9f893f1577c1dc66c345840aa79ecb5ef721138f450be9062baf44cf60f_prof);

        
        $__internal_8841b8a211b44ca941c96d9d580a67e3d8c9a298bb0610a54cbbbf392cdb21b6->leave($__internal_8841b8a211b44ca941c96d9d580a67e3d8c9a298bb0610a54cbbbf392cdb21b6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
