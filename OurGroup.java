import java.util.Vector;

public class OurGroup {

    private Vector<String> groupMembers;
    public OurGroup()
    {
        groupMembers = new Vector<String>();
        groupMembers.add("Peeraphong"); //PUT YOUR NAME HERE
        groupMembers.add("Napatsorn");
        groupMembers.add("Nakharin");
    }
    public Vector<String> getGroupMembers () {
        return groupMembers;
    }

}
