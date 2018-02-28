<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_e9d6d21841b168cea5a8c1b4d2d5837c1e09de5b59b0474ef7e7671a89679b19 extends Twig_Template
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
        $__internal_50cb133be08aa3d90c5741e7fe335893d95a6b710e92d100a3b559d0770d6af8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50cb133be08aa3d90c5741e7fe335893d95a6b710e92d100a3b559d0770d6af8->enter($__internal_50cb133be08aa3d90c5741e7fe335893d95a6b710e92d100a3b559d0770d6af8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_fee860cfeb9d78350c4fbbc81b9623d7c4fcfe5afe6751f7ae9b510d100f690f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fee860cfeb9d78350c4fbbc81b9623d7c4fcfe5afe6751f7ae9b510d100f690f->enter($__internal_fee860cfeb9d78350c4fbbc81b9623d7c4fcfe5afe6751f7ae9b510d100f690f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_50cb133be08aa3d90c5741e7fe335893d95a6b710e92d100a3b559d0770d6af8->leave($__internal_50cb133be08aa3d90c5741e7fe335893d95a6b710e92d100a3b559d0770d6af8_prof);

        
        $__internal_fee860cfeb9d78350c4fbbc81b9623d7c4fcfe5afe6751f7ae9b510d100f690f->leave($__internal_fee860cfeb9d78350c4fbbc81b9623d7c4fcfe5afe6751f7ae9b510d100f690f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/MyJoob/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
